<?php

$dsn = "mysql:host=localhost;dbname=chat_app;charset=utf8mb4";
$username = "jonathan";
$password = "";


try {
	$pdo = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Enable error handling
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Set fetch mode
        PDO::ATTR_EMULATE_PREPARES => false, // Disable emulation mode
    ]);
} catch(PDOException $e){
	die("Connection failed: " . $e->getMessage());
}