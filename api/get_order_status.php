<?php
header("Content-Type: application/json");
include "db.php";

if (!isset($_GET["order_id"])) {
    echo json_encode(["status" => "error", "message" => "Order ID required"]);
    exit;
}

$order_id = $_GET["order_id"];

$stmt = $conn->prepare("SELECT status FROM orders WHERE id = ?");
$stmt->execute([$order_id]);
$order = $stmt->fetch();

if ($order) {
    echo json_encode(["status" => "success", "order_status" => $order['status']]);
} else {
    echo json_encode(["status" => "error", "message" => "Order not found"]);
}
?>
