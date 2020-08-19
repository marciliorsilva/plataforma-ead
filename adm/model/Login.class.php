<?php
date_default_timezone_set("Brazil/East");
if (session_status() !== PHP_SESSION_ACTIVE) {
     session_start();
}
include_once "Conexao.class.php";
include_once "Administrador.class.php";

/**
* 
*/
class Login extends Conexao{
	
		
	private $tempolimite = 900;
    
	function __construct(){
      
	}

	public function verificarLogado(){
		if(!isset($_SESSION["logado"])){
			header("Location: ../login.php");
			exit();
		}else{
			$registro = $_SESSION['registro'];
			$limite = $_SESSION['limite'];
			$segundos = 0;
			
			// verifica se a session  registro esta ativa
			if($registro){
				$segundos = time()- $registro;
			}
			// fim da verificação da session registro

			/* verifica o tempo de inatividade 
			se ele tiver ficado mais de 900 segundos sem atividade ele destrói a session
			se não ele renova o tempo e ai é contado mais 900 segundos*/
			if($segundos>$limite){
				//echo "<script>alert('Sua sessão expirou! Faça o login novamente')</script>";
				session_destroy();
				//$this->atualizarSessaoBD(0,unserialize($this->getUser())->getId());
			
				
				header("Location: ../login.php");

				
			}
			else{
				$_SESSION['registro'] = time();
			}
			// fim da verificação de inatividade

		}
	}

	public function atualizarSessaoBD($sessao, $id){
	
		try {
			$conn = $this->conectar();
			$sql = "UPDATE administrador SET loginAtivo = :loginAtivo WHERE id = :id";
			$stmt = $conn->prepare($sql);
			$stmt->bindParam(':loginAtivo', $sessao);
			$stmt->bindParam(':id', $id);
			$stmt->execute();
			
			return true;
		} catch(PDOException $e) {
			return false;
			echo 'Error: ' . $e->getMessage();
		}
	}

	public function logoutMaster($sessao, $id){
	
		try {
			$conn = $this->conectar();
			$sql = "UPDATE administrador SET loginAtivo = :loginAtivo WHERE id = :id";
			$stmt = $conn->prepare($sql);
			$stmt->bindParam(':loginAtivo', $sessao);
			$stmt->bindParam(':id', $id);
			$stmt->execute();
			session_destroy();
			return true;
		} catch(PDOException $e) {
			return false;
			echo 'Error: ' . $e->getMessage();
		}
	}

	

	public function logar($email,$senha){
		
		$conn = $this->conectar();
		$sql = "SELECT id, nome, loginAtivo,email,senha FROM administrador WHERE email = :email";
		$stmt = $conn->prepare($sql);
 
		$stmt->bindParam(':email', $email);
 
		$stmt->execute();
 
		$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
		
		if (count($users) > 0){
			
			if($users[0]['loginAtivo'] == 0){
				
				if($users[0]['senha'] == $senha){

					
					//if($this->atualizarSessaoBD(1, $users[0]["id"]) == true){
						$objAdministrador =  new Administrador();
	
						$objAdministrador->setId($users[0]["id"]);
						$objAdministrador->setNome($users[0]["nome"]);
						$objAdministrador->setEmail($users[0]["email"]);
						$objAdministrador->setloginAtivo($users[0]["loginAtivo"]);
						$_SESSION["objUser"] = serialize($objAdministrador);
						$_SESSION["logado"] = "sim";
						$_SESSION['registro'] = time(); // armazena o momento em que autenticado //
 						$_SESSION['limite'] = $this->tempolimite; // armazena o tempo limite sem atividade //
			
						return 'loginEfetuado';
					//}
					
			
				}else{
					return 'erroSenha';
				}

			}else{
				return 'logado';
			}
			
		}else{

			return 'administradorInexistente';
		}
    		
		
	
	}

	public function getUser(){
		return $_SESSION["objUser"];
	}

	public function deslogar(){
		//$this->atualizarSessaoBD(0,unserialize($this->getUser())->getId());
		session_destroy();
		header("Location: ../../login.php");
	}

  
	

	
}

?>