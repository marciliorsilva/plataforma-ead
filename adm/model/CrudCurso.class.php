<?php

include_once "Conexao.class.php";
include_once "Curso.class.php";
include_once "Professor.class.php";

/**
* 
*/
class CrudCurso extends Conexao{
	
	  function __construct(){
      
    }
    
    public function cadastrarCurso($nome,$img,$hashtag,$descricao,$idProfessor){
      
        try {
          $conn = $this->conectar();
          $sql = "INSERT INTO curso (nome, img, hashtag,descricao,idProfessor) VALUES (?, ?, ?, ?, ?)";
          $stmt = $conn->prepare($sql);
                $stmt->bindParam(1, $nome);
                $stmt->bindParam(2, $img);
                $stmt->bindParam(3, $hashtag);
                $stmt->bindParam(4, $descricao);
                $stmt->bindParam(5, $idProfessor);

                
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
    
    public function editarCurso($id,$nome,$img,$hashtag,$descricao,$idProfessor){
	
        try {
          $conn = $this->conectar();
          $sql = "UPDATE curso SET nome=?, img=?, hashtag=?, descricao=?, idProfessor=? WHERE id = ?";
          $stmt = $conn->prepare($sql);
                $stmt->bindParam(1, $nome);
                $stmt->bindParam(2, $img);
                $stmt->bindParam(3, $hashtag);
                $stmt->bindParam(4, $descricao);
                $stmt->bindParam(5, $idProfessor);
                $stmt->bindParam(6, $id);

                
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
    
    public function exluirCurso($id){
	
        try {
          $conn = $this->conectar();
          $sql = "DELETE FROM curso WHERE id = ?";
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

    public function consultarCursoId($id){
	
      try {
        $conn = $this->conectar();
        $sql = "SELECT * FROM curso WHERE id = ?";
        $stmt = $conn->prepare($sql);
              $stmt->bindParam(1, $id, PDO::PARAM_INT);
              $objCurso = new Curso();
              $objProfessor = new Professor();

              
              if ($stmt->execute()) {
                  $rs = $stmt->fetch(PDO::FETCH_OBJ);
                  $objProfessor->setId($rs->idProfessor);
                  $objCurso->setId($rs->id);
                  $objCurso->setNome($rs->nome);
                  $objCurso->setImg($rs->img);
                  $objCurso->setHashtag($rs->hashtag);
                  $objCurso->setDescricao($rs->descricao);
                  $objCurso->setObjProfessor($objProfessor);
                  return $objCurso;
                  

              } else {
                  throw new PDOException("Erro: Não foi possível executar a declaração sql");
                  return false;
              }


      } catch(PDOException $e) {
        return false;
        echo 'Error: ' . $e->getMessage();
      }

    }

    public function listarCursos(){
	
      try {
        $conn = $this->conectar();
        $sql = "SELECT curso.id, curso.nome, curso.img, professor.id as idProfessor from curso inner join professor on curso.idProfessor = professor.id";
        $stmt = $conn->prepare($sql);
        $listaCursos = array();
              
          if ($stmt->execute()) {
             
              while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {
                  $objProfessor = new Professor();
                  $objCurso = new Curso();
                  $objProfessor->setId($rs->idProfessor);
                  $objCurso->setId($rs->id);
                  $objCurso->setNome($rs->nome);
                  $objCurso->setImg($rs->img);
                  $objCurso->setObjProfessor($objProfessor);
                  $listaCursos[]=$objCurso;
              }

          } else {
              echo "Erro: Não foi possível recuperar os dados do banco de dados";
          }

          return $listaCursos;

      } catch(PDOException $e) {
        return false;
        echo 'Error: ' . $e->getMessage();
      }

    }
  
  
  
  



}
    
    
    
    


	


?>