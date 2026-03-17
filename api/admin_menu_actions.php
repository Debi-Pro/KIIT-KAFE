<?php
header("Content-Type: " . ($_SERVER['HTTP_ACCEPT'] ?? "application/json"));
include "db.php";

$action = $_POST["action"] ?? "";

if ($action === "add") {
    $name = $_POST["name"];
    $desc = $_POST["description"];
    $price = $_POST["price"];
    $category = $_POST["category"];
    $image = $_POST["image_url"];
    $stock = $_POST["stock"] ?? 0;

    $conn->beginTransaction();
    try {
        $stmt = $conn->prepare("INSERT INTO foods (name, description, price, category, image_url) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$name, $desc, $price, $category, $image]);
        $food_id = $conn->lastInsertId();

        $stockStmt = $conn->prepare("INSERT INTO stock (food_id, quantity) VALUES (?, ?)");
        $stockStmt->execute([$food_id, $stock]);

        $conn->commit();
        echo json_encode(["status" => "success", "message" => "Item added", "id" => $food_id]);
    } catch (Exception $e) {
        $conn->rollBack();
        echo json_encode(["status" => "error", "message" => $e->getMessage()]);
    }
    exit;
}

if ($action === "update") {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $desc = $_POST["description"];
    $price = $_POST["price"];
    $category = $_POST["category"];
    $image = $_POST["image_url"];

    $stmt = $conn->prepare("UPDATE foods SET name=?, description=?, price=?, category=?, image_url=? WHERE id=?");
    if ($stmt->execute([$name, $desc, $price, $category, $image, $id])) {
        echo json_encode(["status" => "success", "message" => "Item updated"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Update failed"]);
    }
    exit;
}

if ($action === "delete") {
    $id = $_POST["id"];
    $stmt = $conn->prepare("DELETE FROM foods WHERE id = ?");
    if ($stmt->execute([$id])) {
        echo json_encode(["status" => "success", "message" => "Item deleted"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Delete failed"]);
    }
    exit;
}

if ($action === "update_stock") {
    $id = $_POST["id"];
    $qty = $_POST["quantity"];
    $stmt = $conn->prepare("UPDATE stock SET quantity = ? WHERE food_id = ?");
    if ($stmt->execute([$qty, $id])) {
        echo json_encode(["status" => "success", "message" => "Stock updated"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Stock update failed"]);
    }
    exit;
}

echo json_encode(["status" => "error", "message" => "Invalid action"]);
?>
