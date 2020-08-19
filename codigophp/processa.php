<?php
session_start();//Inicializar a sessão com PHP

//Incluir a conexao com BD
include_once("conexao.php");

//Receber os dados do formulário
$arquivo_tmp = $_FILES['arquivo']['tmp_name'];

//ler todo o arquivo para um array
$dados = file($arquivo_tmp);

//Ler os dados do array
foreach($dados as $linha){
	//Retirar os espaços em branco no inicio e no final da string
	$linha = trim($linha);
	//Colocar em um array cada item separado pela virgula na string
	//$valor = explode(',', $linha);
	
	//Recuperar o valor do array indicando qual posição do array requerido e atribuindo para um variável
	
	$email = $linha;
	
	
	
	//Criar a QUERY com PHP para inserir os dados no banco de dados
	$result_usuario = "INSERT INTO aluno (email, senha, loginAtivo) VALUES ('$email', '123456', 0)";
	
	//Executar a QUERY para inserir os registros no banco de dados com MySQLi
	$resultado_usuario = mysqli_query($conn, $result_usuario);
	$id = mysqli_insert_id($conn);
	//Criar a QUERY com PHP para inserir os dados no banco de dados
	$result_associacao = "INSERT INTO cursoalunos (idAluno,idCurso) VALUES ('$id', 4)";
	//Executar a QUERY para inserir os registros no banco de dados com MySQLi
	$resultado_associacao = mysqli_query($conn, $result_associacao);
	
		
}
//Criar a variável global com a mensagem de sucesso
$_SESSION['msg'] = "<p style='color: green;'>Carregado os dados com sucesso!</p>";
//Redirecionar o usuário com PHP para a página index.php
header("Location: index.php");