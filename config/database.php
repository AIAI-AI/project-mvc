<?php
return [
    'host' => getenv('MYSQLHOST'),
    'port' => getenv('MYSQLPORT'),
    'dbname' => getenv('MYSQLDATABASE'),
    'username' => getenv('MYSQLUSER'),
    'password' => getenv('MYSQLPASSWORD'),
    'charset' => 'utf8mb4'
];
