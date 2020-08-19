<?php

include_once "Conexao.class.php";
include_once "Professor.class.php";

/**
* 
*/
class CrudProfessor extends Conexao{
	
	function __construct(){
      
  }
    
  public function cadastrarProfessor($nome,$email){
	
        try {
          $loginAtivo = 0;
          $bloqueado = 0;
          $conn = $this->conectar();
          $sql = "INSERT INTO professor(nome,email,loginAtivo,bloqueado) VALUES (?, ?, ?, ?)";
          $stmt = $conn->prepare($sql);
                $stmt->bindParam(1, $nome);
                $stmt->bindParam(2, $email);
                $stmt->bindParam(3, $loginAtivo);
                $stmt->bindParam(4, $bloqueado);

                if ($stmt->execute()) {
                    if ($stmt->rowCount() > 0) {
                      return true;
                    
                    } else {
                      return false;
                    }
                } else {
                      throw new PDOException("Erro: Não foi possível executar a declaração sql");
                      return false;
                }
        } catch(PDOException $e) {
          return false;
          echo 'Error: ' . $e->getMessage();
        }
  }
    
  public function editarProfessor($id,$nome,$email){
	
        try {
          $conn = $this->conectar();
          $sql = "UPDATE professor SET nome=?, email=? WHERE id = ?";
          $stmt = $conn->prepare($sql);
                $stmt->bindParam(1, $nome);
                $stmt->bindParam(2, $email);
                $stmt->bindParam(3, $id);

                
                if ($stmt->execute()) {
                   
                      return true;
                    
                } else {
                      throw new PDOException("Erro: Não foi possível executar a declaração sql");
                      return false;
                }
        } catch(PDOException $e) {
          return false;
          echo 'Error: ' . $e->getMessage();
        }
  }
    
  public function exluirProfessor($id){
	
        try {
          $conn = $this->conectar();
          $sql = "DELETE FROM professor WHERE id = ?";
          $stmt = $conn->prepare($sql);
                $stmt->bindParam(1, $id);

                
                if ($stmt->execute()) {
                    if ($stmt->rowCount() > 0) {
                      return true;
                    
                    } else {
                      return false;
                    }
                } else {
                      throw new PDOException("Erro: Não foi possível executar a declaração sql");
                      return false;
                }
        } catch(PDOException $e) {
          return false;
          echo 'Error: ' . $e->getMessage();
        }
  }

  public function consultarProfessorId($id){
	
      try {
        $conn = $this->conectar();
        $sql = "SELECT * FROM professor WHERE id = ?";
        $stmt = $conn->prepare($sql);
              $stmt->bindParam(1, $id, PDO::PARAM_INT);
              $objProfessor = new Professor();

              
              if ($stmt->execute()) {
                  $rs = $stmt->fetch(PDO::FETCH_OBJ);
                  $objProfessor->setId($rs->id);
                  $objProfessor->setNome($rs->nome);
                  $objProfessor->setEmail($rs->email);
                
                  return $objProfessor;
                  

              } else {
                  throw new PDOException("Erro: Não foi possível executar a declaração sql");
                  return false;
              }
              
      } catch(PDOException $e) {
        return false;
        echo 'Error: ' . $e->getMessage();
      }
  }

  public function listarProfessores(){
	
        try {
          $conn = $this->conectar();
          $sql = "SELECT * FROM professor";
          $stmt = $conn->prepare($sql);
          $listaProfessores = array();
                
            if ($stmt->execute()) {
               
                while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {
                    $objProfessor = new Professor();
                    $objProfessor->setId($rs->id);
                    $objProfessor->setNome($rs->nome);
                    $objProfessor->setEmail($rs->email);
                    $objProfessor->setLoginAtivo($rs->loginAtivo);
                    $listaProfessores[]=$objProfessor;
                }
            } else {
                echo "Erro: Não foi possível recuperar os dados do banco de dados";
            }

            return $listaProfessores;

        } catch(PDOException $e) {
          return false;
          echo 'Error: ' . $e->getMessage();
        }

  }
    
    
    
    


	
}

?>