<?php
header("Content-Type: application/json");
include "db.php";

$data = json_decode(file_get_contents("php://input"), true);

if (!isset($data["user_id"])) {
    echo json_encode(["status" => "error", "message" => "Missing user_id"]);
    exit;
}

$user_id = $data["user_id"];

try {
    // Fetch orders with items
    $stmt = $conn->prepare("
        SELECT o.id, o.order_code, o.total, o.status, o.payment_method, o.created_at,
               GROUP_CONCAT(oi.item_name SEPARATOR ', ') as items,
               SUM(oi.quantity) as total_items
        FROM orders o
        LEFT JOIN order_items oi ON o.id = oi.order_id
        WHERE o.user_id = ?
        GROUP BY o.id, o.order_code, o.total, o.status, o.payment_method, o.created_at
        ORDER BY o.created_at DESC
    ");
    $stmt->execute([$user_id]);
    $orders = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode([
        "status" => "success",
        "orders" => $orders
    ]);
} catch (Exception $e) {
    error_log("Order fetch error: " . $e->getMessage());
    echo json_encode([
        "status" => "error",
        "message" => "Failed to fetch orders: " . $e->getMessage()
    ]);
}
?>
