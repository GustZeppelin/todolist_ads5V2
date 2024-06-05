<?php

$hostname = 'localhost';
$database = 'to_do_list';
$port = '3306';
$username = 'root';
$password = '';


try {
    $pdo = new PDO("mysql:host=$hostname;dbname=$database;port=$port", $username, $password);
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}