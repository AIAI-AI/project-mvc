<?php
// Test connection
try {
    $host = getenv('MYSQLHOST');
    $port = getenv('MYSQLPORT');
    $db = getenv('MYSQLDATABASE');
    $user = getenv('MYSQLUSER');
    $pass = getenv('MYSQLPASSWORD');
    
    echo "Connecting to: $host:$port / $db as $user\n";
    
    $conn = new PDO("mysql:host=$host;port=$port;dbname=$db", $user, $pass);
    echo "Connected successfully!";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
