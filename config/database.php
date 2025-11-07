<?php
// Railway menyediakan MySQL variables otomatis
return [
    'host' => getenv('MYSQLHOST') ?: 'localhost',
    'port' => getenv('MYSQLPORT') ?: '3306',
    'dbname' => getenv('MYSQLDATABASE') ?: 'mvc_db',
    'username' => getenv('MYSQLUSER') ?: 'root',
    'password' => getenv('MYSQLPASSWORD') ?: 'AisyahTech!2025',
    'charset' => 'utf8mb4'
];