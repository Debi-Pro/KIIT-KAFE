<?php
header("Content-Type: application/json");
include "db.php";

// Get menu items with stock and popularity (order count)
$sql = "SELECT f.*, 
        COALESCE(s.quantity, 0) as stock,
        COALESCE(pop.total_qty, 0) as popularity
        FROM foods f
        LEFT JOIN stock s ON f.id = s.food_id
        LEFT JOIN (
            SELECT food_id, SUM(quantity) as total_qty
            FROM order_items
            GROUP BY food_id
        ) pop ON f.id = pop.food_id
        ORDER BY popularity DESC";
$stmt = $conn->query($sql);

$menu = [];
while ($row = $stmt->fetch()) {
    $row['id'] = (int)$row['id'];
    $row['price'] = (float)$row['price'];
    $row['stock'] = (int)$row['stock'];
    $row['popularity'] = (int)$row['popularity'];
    $cat_emojis = [
        'Beverages' => '🥤',
        'Wafers' => '🍪',
        'Snacks' => '🍟',
        'Coffee & Drinks' => '☕',
        'Hot Dogs' => '🌭',
        'Biryani' => '🍛'
    ];
    $row['emoji'] = $cat_emojis[$row['category']] ?? '🍽';
    $row['cat'] = $row['category'];
    $row['img'] = $row['image_url'];
    $row['sub'] = $row['description'];
    $menu[] = $row;
}

echo json_encode($menu);
?>
