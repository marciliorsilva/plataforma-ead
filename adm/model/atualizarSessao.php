<?php
include_once "Login.class.php";

$objLogin = new Login();

$objLogin->logoutMaster(0,$_POST['id']);
?>