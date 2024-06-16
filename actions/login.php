<?php

require_once('../database/conn.php');
$user = filter_input(INPUT_POST,  'username');
$password = filter_input(INPUT_POST,  'password');

if ($user && $password) {
    $sql = $pdo->prepare("SELECT * FROM login WHERE user = :user AND password = :password");
    $sql->bindParam(':user', $user, PDO::PARAM_STR);
    $sql->bindParam(':password', $password, PDO::PARAM_STR);
    $sql->execute();

    if ($sql->rowCount() > 0) { 
        header('Location: ../index.php');
    } else {
        header('Location: ../login.php');
    }
}

if(!$user) {
    header('Location: ../login.php');
}

if(!$password) {
    header('Location: ../login.php');
}