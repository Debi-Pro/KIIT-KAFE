<?php
header("Content-Type: text/plain");
$host = "localhost";
$user = "root";
$pass = "";

try {
    $conn = new PDO("mysql:host=$host", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("MySQL connection failed: " . $e->getMessage());
}

$sqlFile = "database.sql";
$sqlPath = dirname(__DIR__) . DIRECTORY_SEPARATOR . $sqlFile;
$sqlContent = file_get_contents($sqlPath);

if ($sqlContent === false) {
    die("Error: Could not read $sqlFile at $sqlPath");
}

$queries = array_filter(array_map('trim', explode(';', $sqlContent)));

echo "Starting database setup...\n";

foreach ($queries as $query) {
    if (empty($query)) continue;
    try {
        $conn->exec($query);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage() . "\n";
    }
}

$conn->exec("USE kiit_kaffe_db");

$adminEmail = "admin@kiitkafe.in";
$adminPass = "admin123";
$adminName = "System Admin";

$check = $conn->prepare("SELECT id FROM users WHERE email = ?");
$check->execute([$adminEmail]);

if ($check->rowCount() === 0) {
    $ins = $conn->prepare("INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, 'admin')");
    if ($ins->execute([$adminName, $adminEmail, $adminPass])) {
        echo "Default Admin account created! (Email: admin@kiitkafe.in / Pass: admin123)\n";
    }
} else {
    echo "Admin account already exists.\n";
}

echo "Database setup complete!\n";
$conn = null;
?>
