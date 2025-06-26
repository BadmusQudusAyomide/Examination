<?php

// Fetch credentials from environment variables, with local fallbacks
$host = getenv('DB_HOST') ?: 'localhost';
$port = getenv('DB_PORT') ?: '3306';
$user = getenv('DB_USER') ?: 'root';
$pass = getenv('DB_PASS') ?: '';
$db = getenv('DB_NAME') ?: 'cee_db';
$conn = null;

// LOCAL CONNECTION (uncomment to use local database)
// $host = "localhost";
// $port = "3306";
// $user = "root";
// $pass = "";
// $db   = "cee_db";

try {
  $conn = new PDO("mysql:host={$host};port={$port};dbname={$db};", $user, $pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  // Never show detailed errors in production
  die("Database connection failed. Please check configuration.");
}


?>