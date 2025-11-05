<?php
$host = getenv('MYSQLHOST');
if (!$host) {
    echo "<pre>MYSQLHOST tidak terbaca di environment.</pre>";
}

return [
    'host' => 'tcp:' . (getenv('MYSQLHOST') ?: 'localhost'),
    'port' => getenv('MYSQLPORT') ?: '3306',
    'dbname' => getenv('MYSQLDATABASE') ?: 'mvc_db',
    'username' => getenv('MYSQLUSER') ?: 'root',
    'password' => getenv('MYSQLPASSWORD') ?: 'AisyahTech!2025',
    'charset' => 'utf8mb4'
];
