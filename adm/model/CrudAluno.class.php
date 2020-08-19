<?php

include_once "Conexao.class.php";
include_once "Aluno.class.php";

/**
* 
*/
class CrudAluno extends Conexao{
	
	function __construct(){
      
  }
    
    public function cadastrarAluno($nome,$email,$senha,$loginAtivo,$bloqueado){
	
        try {
          $conn = $this->conectar();
          $sql = "INSERT INTO aluno(nome,email,senha,loginAtivo,bloqueado) VALUES (?,?,?,?,?)";
          $stmt = $conn->prepare($sql);
                $stmt->bindParam(1, $nome);
                $stmt->bindParam(2, $email);
                $stmt->bindParam(3, $senha);
                $stmt->bindParam(4, $loginAtivo);
                $stmt->bindParam(5, $bloqueado);

                
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
    
    public function editarAluno($id,$nome,$email,$senha,$loginAtivo,$bloqueado){
	
        try {
          $conn = $this->conectar();
          $sql = "UPDATE aluno SET nome=?, email=?, senha=?, loginAtivo=?, bloqueado=? WHERE id = ?";
          $stmt = $conn->prepare($sql);
                $stmt->bindParam(1, $nome);
                $stmt->bindParam(2, $email);
                $stmt->bindParam(3, $senha);
                $stmt->bindParam(4, $loginAtivo);
                $stmt->bindParam(5, $bloqueado);
                $stmt->bindParam(6, $id);

                
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
    
    public function exluirAluno($id){
	
        try {
          $conn = $this->conectar();
          $sql = "DELETE FROM Aluno WHERE id = ?";
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

    public function consultarAlunoId($id){
	
      try {
        $conn = $this->conectar();
        $sql = "SELECT * FROM Aluno WHERE id = ?";
        $stmt = $conn->prepare($sql);
              $stmt->bindParam(1, $id, PDO::PARAM_INT);
              $objAluno = new Aluno();

              
              if ($stmt->execute()) {
                  $rs = $stmt->fetch(PDO::FETCH_OBJ);
                  $objAluno->setId($rs->id);
                  $objAluno->setNome($rs->nome);
                  $objAluno->setEmail($rs->email);
                  $objAluno->setSenha($rs->senha);
                  $objAluno->setLoginAtivo($rs->loginAtivo);
                  $objAluno->setBloqueado($rs->bloqueado);
                
                  return $objAluno;
                  

              } else {
                  throw new PDOException("Erro: Não foi possível executar a declaração sql");
                  return false;
              }
      } catch(PDOException $e) {
        return false;
        echo 'Error: ' . $e->getMessage();
      }
    }

    public function listarAlunos(){
	
        try {
          $conn = $this->conectar();
          $sql = "SELECT * FROM Aluno";
          $stmt = $conn->prepare($sql);
          $listaAlunos = array();
                
            if ($stmt->execute()) {
               
                while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {
                    $objAluno = new Aluno();
                    $objAluno->setId($rs->id);
                    $objAluno->setNome($rs->nome);
                    $objAluno->setEmail($rs->email);
                    $objAluno->setLoginAtivo($rs->loginAtivo);
                   

                    $listaAlunos[]=$objAluno;
                }
            } else {
                echo "Erro: Não foi possível recuperar os dados do banco de dados";
            }

            return $listaAlunos;

        } catch(PDOException $e) {
          return false;
          echo 'Error: ' . $e->getMessage();
        }

      }
    
    
    
    


	
    }

?>