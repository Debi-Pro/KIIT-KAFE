<?php
header("Content-Type: application/json");
include "db.php";

$user_id = $_GET["user_id"] ?? null;
$admin = $_GET["admin"] ?? null;

if ($admin) {
    $stmt = $conn->query("SELECT o.*, u.name as user_name FROM orders o JOIN users u ON o.user_id = u.id ORDER BY o.created_at DESC");
    $orders = $stmt->fetchAll();
    
    foreach ($orders as &$order) {
        $oid = $order['id'];
        $itemsStmt = $conn->prepare("SELECT * FROM order_items WHERE order_id = ?");
        $itemsStmt->execute([$oid]);
        $order['items'] = $itemsStmt->fetchAll();
    }
} elseif ($user_id) {
    $stmt = $conn->prepare("SELECT * FROM orders WHERE user_id = ? ORDER BY created_at DESC");
    $stmt->execute([$user_id]);
    $orders = $stmt->fetchAll();
    
    foreach ($orders as &$order) {
        $oid = $order['id'];
        $itemsStmt = $conn->prepare("SELECT * FROM order_items WHERE order_id = ?");
        $itemsStmt->execute([$oid]);
        $order['items'] = $itemsStmt->fetchAll();
    }
} else {
    echo json_encode(["status" => "error", "message" => "User ID required"]);
    exit;
}

echo json_encode(["status" => "success", "orders" => $orders]);
?>
