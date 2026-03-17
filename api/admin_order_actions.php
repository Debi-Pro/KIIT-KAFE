<?php
header("Content-Type: application/json");
include "db.php";

$action = $_POST["action"] ?? "";

if ($action === "update_status") {
    $order_id = $_POST["order_id"];
    $status = $_POST["status"];

    $stmt = $conn->prepare("UPDATE orders SET status = ? WHERE id = ?");
    if ($stmt->execute([$status, $order_id])) {
        echo json_encode(["status" => "success", "message" => "Status updated to $status"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Update failed"]);
    }
    exit;
}

echo json_encode(["status" => "error", "message" => "Invalid action"]);
?>
