<?php
// DATABASE CONNECTION
// 1. Setup (costanti)
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_NAME', 'university');

// Connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check
if ($conn->connect_error) {
    die("Database connection error");
}

?>