<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'secondhandbutik');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');

try {
    $pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Database connection failed: ' . $e->getMessage());
}

if (!$pdo) {
    die('Database connection failed.');
}