<?php 
	include_once "../../model/Login.class.php";
    $objLogin = new Login();
	$objLogin->verificarLogado();
	$objLogin->deslogar();
?>