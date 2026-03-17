<?php
header("Content-Type: application/json");
include "db.php";

$revenueStmt = $conn->query("SELECT COALESCE(SUM(total), 0) as total FROM orders WHERE status != 'Failed' AND status != 'Invalid'");
$revenue = $revenueStmt->fetch()['total'];

$ordersStmt = $conn->query("SELECT COUNT(*) as count FROM orders");
$totalOrders = $ordersStmt->fetch()['count'];

$lowStockCountStmt = $conn->query("SELECT COUNT(*) as count FROM foods f LEFT JOIN stock s ON f.id = s.food_id WHERE COALESCE(s.quantity, 0) < 5");
$lowStock = $lowStockCountStmt->fetch()['count'];

$lowStockItemsStmt = $conn->query("SELECT f.*, COALESCE(s.quantity, 0) as stock FROM foods f LEFT JOIN stock s ON f.id = s.food_id WHERE COALESCE(s.quantity, 0) < 5");
$lowStockItems = $lowStockItemsStmt->fetchAll();

foreach($lowStockItems as &$item) {
    $cat_emojis = [
        'Beverages' => '🥤',
        'Wafers' => '🍪',
        'Snacks' => '🍟',
        'Coffee & Drinks' => '☕',
        'Hot Dogs' => '🌭',
        'Biryani' => '🍛'
    ];
    $item['emoji'] = $cat_emojis[$item['category']] ?? '🍽';
}

$recentOrdersStmt = $conn->query("SELECT o.*, u.name as user_name FROM orders o JOIN users u ON o.user_id = u.id ORDER BY o.created_at DESC LIMIT 10");
$recentOrders = $recentOrdersStmt->fetchAll();

// Frequent/Popular items (by order count)
$frequentItemsStmt = $conn->query("
    SELECT oi.item_name, oi.food_id, f.image_url, f.category,
           SUM(oi.quantity) as total_qty, COUNT(DISTINCT o.id) as order_count 
    FROM order_items oi 
    LEFT JOIN foods f ON oi.food_id = f.id
    LEFT JOIN orders o ON oi.order_id = o.id
    GROUP BY oi.item_name, oi.food_id, f.image_url, f.category
    ORDER BY total_qty DESC 
    LIMIT 5
");
$frequentItems = $frequentItemsStmt->fetchAll();

// Add emojis to frequent items
foreach($frequentItems as &$item) {
    $cat_emojis = [
        'Beverages' => '🥤',
        'Wafers' => '🍪',
        'Snacks' => '🍟',
        'Coffee & Drinks' => '☕',
        'Hot Dogs' => '🌭',
        'Biryani' => '🍛'
    ];
    $item['emoji'] = $cat_emojis[$item['category']] ?? '🍽';
}

// Today's stats
$todayStmt = $conn->query("
    SELECT 
        COUNT(*) as today_orders,
        COALESCE(SUM(total), 0) as today_revenue
    FROM orders 
    WHERE DATE(created_at) = CURDATE()
");
$todayStats = $todayStmt->fetch();

// Pending orders count
$pendingStmt = $conn->query("SELECT COUNT(*) as count FROM orders WHERE status = 'Pending'");
$pendingOrders = $pendingStmt->fetch()['count'];

echo json_encode([
    "status" => "success",
    "stats" => [
        "revenue" => (float)$revenue,
        "total_orders" => (int)$totalOrders,
        "low_stock" => (int)$lowStock,
        "low_stock_items" => $lowStockItems,
        "frequent_items" => $frequentItems,
        "today_orders" => (int)$todayStats['today_orders'],
        "today_revenue" => (float)$todayStats['today_revenue'],
        "pending_orders" => (int)$pendingOrders
    ],
    "recent_orders" => $recentOrders
]);
?>
