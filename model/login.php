<?php

require 'init.php';

$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['senha']) ? $_POST['senha'] : '';

$PDO = db_connect();


if (empty($email) || empty($password)) {
    return false;
    exit;
}

$passwordHash = sha1($password);

$sql = "SELECT id, email, loginAtivo FROM aluno WHERE email = :email AND senha = :senha";
$stmt = $PDO->prepare($sql);

$stmt->bindParam(':email', $email);
$stmt->bindParam(':senha', $passwordHash);

$stmt->execute();

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);


if (count($users) <= 0) {
    echo "erro";
    exit;
}

$user = $users[0];

if ($user['sessionLogin'] == 0) {
    $sql2 = "UPDATE aluno SET loginAtivo = 1 WHERE id = :id";
    $stmt2 = $PDO->prepare($sql2);
    $stmt2->bindParam(':id', $user['id']);
    $stmt2->execute();
} else {
    echo 'logado';
    exit;
}


session_start();
$_SESSION['logged_in'] = true;
$_SESSION['user_id'] = $user['id'];
$_SESSION['user_email'] = $user['email'];
$_SESSION['user_sessionLogin'] = $user['sessionLogin'];

echo "loginEfetuado";
