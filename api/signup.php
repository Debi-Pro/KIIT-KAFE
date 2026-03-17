<?php
header("Content-Type: application/json");
include "db.php";

$data = json_decode(file_get_contents("php://input"), true);

if (!isset($data["name"], $data["email"], $data["phone"], $data["password"])) {
    echo json_encode(["status" => "error", "message" => "Missing fields"]);
    exit;
}

$name = trim($data["name"]);
$email = trim($data["email"]);
$phone = trim($data["phone"]);
$password = $data["password"];

$check = $conn->prepare("SELECT id FROM users WHERE email = ?");
$check->execute([$email]);
$existing = $check->fetch();

if ($existing) {
    echo json_encode(["status" => "error", "message" => "Email already registered"]);
    exit;
}

$stmt = $conn->prepare("INSERT INTO users (name, email, phone, password) VALUES (?, ?, ?, ?)");
if ($stmt->execute([$name, $email, $phone, $password])) {
    echo json_encode(["status" => "success"]);
} else {
    echo json_encode(["status" => "error", "message" => "Signup failed"]);
}
?>
