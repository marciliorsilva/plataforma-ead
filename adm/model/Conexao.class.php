<?php
class Conexao{
	
   private $servidor="localhost";
   private $usuario="root";
   private $senha="";
   private $banco="berlim_ead";

   private $conn = null;
   private $query = null;
   private $result = null;



	public function conectar(){
		try {
  			$this->conn = new PDO('mysql:host=localhost;dbname='.$this->banco, $this->usuario, $this->senha);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $this->conn;
		} catch(PDOException $e) {
    		echo 'ERROR: ' . $e->getMessage();
    		die();
		}
	}
  
  	public function desconectar(){
      return $this->conn = null;
  	}


}

?>