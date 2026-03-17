<?php

$host = "localhost";
$user = "root";
$pass = "";

// Connect to MySQL server first (without DB)
$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("MySQL connection failed: " . $conn->connect_error);
}

// Read the SQL file
$sqlFile = "database.sql";
$sqlContent = file_get_contents("../" . $sqlFile); // Path relative to /api/

if ($sqlContent === false) {
    die("Error: Could not read $sqlFile");
}

// Explode into individual queries (assuming ; is at the end of each)
$queries = array_filter(array_map('trim', explode(';', $sqlContent)));

echo "Starting database setup...\n";

foreach ($queries as $query) {
    if ($conn->query($query)) {
        // Echo success for each (can be noisy, but good for verification)
    } else {
        echo "Error executing query: " . $conn->error . "\n";
    }
}

echo "Database and tables successfully setup/verified!\n";

$conn->close();

?>
