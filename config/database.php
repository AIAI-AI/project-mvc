<?php
// Test connection
try {
    $host = getenv('MYSQLHOST') ?: 'localhost'; 
    $port = getenv('MYSQLPORT') ?: '3306';
    $db = getenv('MYSQLDATABASE') ?: 'mvc_db';
    $user = getenv('MYSQLUSER') ?: 'root';
    $pass = getenv('MYSQLPASSWORD') ?: 'AisyahTech!2025';
    
    echo "Connecting to: $host:$port / $db as $user\n";
    
    $conn = new PDO("mysql:host=$host;port=$port;dbname=$db", $user, $pass);
    echo "Connected successfully!";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
