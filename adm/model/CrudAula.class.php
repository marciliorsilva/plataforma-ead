<?php

include_once "Conexao.class.php";
include_once "Aula.class.php";
include_once "Curso.class.php";

/**
* 
*/
class CrudAula extends Conexao{
	
	  function __construct(){
      
    }
    
    public function cadastrarAula($titulo,$data,$hora,$descricao,$link,$img,$idCurso){
      
        try {
          $conn = $this->conectar();
          $sql = "INSERT INTO aula (titulo, dataAula, hora,descricao,link,img,idCurso) VALUES (?, ?, ?, ?, ?, ?, ?)";
          $stmt = $conn->prepare($sql);
                $stmt->bindParam(1, $titulo);
                $stmt->bindParam(2, $data);
                $stmt->bindParam(3, $hora);
                $stmt->bindParam(4, $descricao);
                $stmt->bindParam(5, $link);
                $stmt->bindParam(6, $img);
                $stmt->bindParam(7, $idCurso);

                
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
         
          echo 'Error: ' . $e->getMessage();
          return false;
        }
    }

    public function editarAula($id,$titulo,$data,$hora,$descricao,$link,$img){
	
      try {
        $conn = $this->conectar();
        $sql = "UPDATE aula SET titulo=?, dataAula=?, hora=?, descricao=?, link=?, img=? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1, $titulo);
        $stmt->bindParam(2, $data);
        $stmt->bindParam(3, $hora);
        $stmt->bindParam(4, $descricao);
        $stmt->bindParam(5, $link);
        $stmt->bindParam(6, $img);
        $stmt->bindParam(7, $id);

              
              if ($stmt->execute()) {
                  
                    return true;
                  
              } else {
                    throw new PDOException("Erro: Não foi possível executar a declaração sql");
                    return false;
              }

      } catch(PDOException $e) {
        
        echo 'Error: ' . $e->getMessage();
        return false;
      }
  }
    
    public function listarAulas($id){
	
      try {
        $conn = $this->conectar();
        $sql = "SELECT * FROM aula WHERE idCurso = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $listaAulas = array();
              
          if ($stmt->execute()) {
             
              while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {
                  
                
                  $objAula = new Aula();
                  $objAula->setId($rs->id);
                  $objAula->setTitulo($rs->titulo);
                  $objAula->setData($rs->dataAula);
                  $objAula->setHora($rs->hora);
                  $objAula->setImg($rs->img);
                  $objAula->setDescricao($rs->descricao);
                  $objAula->setLink($rs->link);
                  $objCurso = new Curso();
                  $objCurso->setId($rs->idCurso);
                  $objAula->setObjCurso($objCurso);
                  $listaAulas[]=$objAula;
              }

          } else {
              echo "Erro: Não foi possível recuperar os dados do banco de dados";
          }

          return $listaAulas;

      } catch(PDOException $e) {
        
        echo 'Error: ' . $e->getMessage();
        return false;
      }

    }

    public function excluirAula($id){
	
      try {
        $conn = $this->conectar();
        $sql = "DELETE FROM aula WHERE id = ?";
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
        
        echo 'Error: ' . $e->getMessage();
        return false;
      }
    }

    public function consultarAulaId($id){
	
      try {
        $conn = $this->conectar();
        $sql = "SELECT * FROM aula WHERE id = ?";
        $stmt = $conn->prepare($sql);
              $stmt->bindParam(1, $id, PDO::PARAM_INT);
              $objAula = new Aula();
              

              
              if ($stmt->execute()) {
                  $rs = $stmt->fetch(PDO::FETCH_OBJ);
                 
                  $objAula->setId($rs->id);
                  $objAula->setTitulo($rs->titulo);
                  $objAula->setData($rs->dataAula);
                  $objAula->setHora($rs->hora);
                  $objAula->setImg($rs->img);
                  $objAula->setDescricao($rs->descricao);
                  $objAula->setLink($rs->link);
                 
                  return $objAula;
                  

              } else {
                  throw new PDOException("Erro: Não foi possível executar a declaração sql");
                  return false;
              }


      } catch(PDOException $e) {
       
        echo 'Error: ' . $e->getMessage();
        return false;
      }

    }

    public function listarAula(){
	
      try {
        $conn = $this->conectar();
        $sql = "SELECT * FROM aula";
        $stmt = $conn->prepare($sql);
        $listaAulas = array();
              
          if ($stmt->execute()) {
             
              while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {
                $objAula = new Aula();
                $objAula->setId($rs->id);
                $objAula->setTitulo($rs->titulo);
                $objAula->setData($rs->dataAula);
                $objAula->setHora($rs->hora);
                $objAula->setImg($rs->img);
                $objAula->setDescricao($rs->descricao);
                $objAula->setLink($rs->link);
                $listaAulas[]=$objAula;
              }
          } else {
              echo "Erro: Não foi possível recuperar os dados do banco de dados";
          }

          return $listaAulas;

      } catch(PDOException $e) {
        
        echo 'Error: ' . $e->getMessage();
        return false;
      }

    }

   
   



}
    
    
    
    


	


?>