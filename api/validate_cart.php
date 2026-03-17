<?php
header("Content-Type: application/json");
include "db.php";

$data = json_decode(file_get_contents("php://input"), true);

if (!isset($data["cart_items"])) {
    echo json_encode(["status" => "error", "message" => "Missing cart_items"]);
    exit;
}

$cart_items = $data["cart_items"];
$validation_errors = [];

try {
    foreach ($cart_items as $item) {
        $food_id = $item["id"];
        $qty = $item["qty"];
        
        // Check stock availability
        $stmt = $conn->prepare("SELECT quantity FROM stock WHERE food_id = ?");
        $stmt->execute([$food_id]);
        $stock = $stmt->fetch();
        
        if (!$stock) {
            $validation_errors[] = [
                "id" => $food_id,
                "message" => "Item not found in inventory"
            ];
        } elseif ($stock["quantity"] < $qty) {
            $validation_errors[] = [
                "id" => $food_id,
                "message" => "Only {$stock["quantity"]} item(s) available in stock"
            ];
        }
    }
    
    if (count($validation_errors) > 0) {
        echo json_encode([
            "status" => "error",
            "message" => "Stock validation failed",
            "errors" => $validation_errors
        ]);
    } else {
        echo json_encode([
            "status" => "success",
            "message" => "Cart validated successfully"
        ]);
    }
} catch (Exception $e) {
    echo json_encode([
        "status" => "error",
        "message" => "Validation error: " . $e->getMessage()
    ]);
}
?>
