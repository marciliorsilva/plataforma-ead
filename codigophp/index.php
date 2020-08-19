<?php
session_start(); //Inicializar a sessão com PHP
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
		<title>Importar TXT</title>
	</head>
	<body>
		<!--Titulo do Formulário-->
		<h1>Importar dados do arquivo TXT</h1>
		<?php
		//Imprimir a mensagem de sucesso no upload de dados do arquivo txt para o banco de dados com mysqli
		if(isset($_SESSION['msg'])){
			//Imprimir o valor da sessão
			echo $_SESSION['msg'];
			//Destruir a sessão com PHP
			unset($_SESSION['msg']);
		}
		?>
		<!--Formulário com PHP para fazer upload de arquivo com PHP-->
		<form method="POST" action="processa.php" enctype="multipart/form-data">
			<label>Arquivo</label>
			<!--Campo para fazer o upload do arquivo com PHP-->
			<input type="file" name="arquivo"><br><br>			
			<input type="submit" value="Importar">
		</form>
	</body>
</html>