<?php
header("Content-Type: application/json");
include "db.php";

$data = json_decode(file_get_contents("php://input"), true);
$email = trim($data["email"] ?? "");
$new_password = $data["new_password"] ?? "";

if (!$email || !$new_password) {
    echo json_encode(["status" => "error", "message" => "Email and new password required"]);
    exit;
}

$stmt = $conn->prepare("UPDATE users SET password = ? WHERE email = ?");
if ($stmt->execute([$new_password, $email])) {
    if ($stmt->rowCount() > 0) {
        echo json_encode(["status" => "success", "message" => "Password updated successfully"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Email not found"]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Update failed"]);
}
?>
