<?php

require 'init.php';

session_start();

$PDO = db_connect();

$_SESSION['logged_in'] = false;

$sql = "UPDATE usuarios SET sessionLogin = 0 WHERE id = :id";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':id', $_SESSION['user_id']);
$stmt->execute();
 

session_destroy();


header('Location: ../');