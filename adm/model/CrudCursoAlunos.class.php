<?php

include_once "Conexao.class.php";
include_once "Aluno.class.php";
include_once "Curso.class.php";
include_once "Professor.class.php";
include_once "CursoAlunos.class.php";

/**
* 
*/
class CrudCursoAlunos extends Conexao{
	
	function __construct(){
      
    }
    
    public function listarAlunosPorCurso($id){
	
      try {
        $conn = $this->conectar();
        $sql = "SELECT cursoalunos.idCurso, cursoalunos.idAluno, aluno.email, aluno.nome as nomeAluno, aluno.loginAtivo from cursoalunos INNER JOIN aluno ON cursoalunos.idAluno = aluno.id INNER JOIN curso ON cursoalunos.idCurso = curso.id
        WHERE curso.id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $listaAlunosCurso = array();
              
          if ($stmt->execute()) {
             
              while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {
                  $objCursoAlunos = new CursoAlunos();
                  $objAluno = new Aluno();
                  $objAluno->setId($rs->idAluno);
                  $objAluno->setNome($rs->nomeAluno);
                  $objAluno->setEmail($rs->email);
                  $objAluno->setloginAtivo($rs->loginAtivo);
                  $objCurso = new Curso();
                  $objCurso->setId($rs->idCurso);
                  $objCursoAlunos->setObjCurso($objCurso);
                  $objCursoAlunos->setObjAluno($objAluno);
                  $listaAlunosCurso[]=$objCursoAlunos;
              }

          } else {
              echo "Erro: Não foi possível recuperar os dados do banco de dados";
          }

          return $listaAlunosCurso;

      } catch(PDOException $e) {
        
        echo 'Error: ' . $e->getMessage();
        return false;
      }

    }

    public function listarCursosAluno($idAluno){
      
      try {
        $conn = $this->conectar();
        $sql = "SELECT curso.*, professor.nome as nomeProfessor from cursoalunos INNER JOIN aluno ON cursoalunos.idAluno = aluno.id INNER JOIN curso ON cursoalunos.idCurso = curso.id INNER JOIN professor ON curso.idProfessor = professor.id where aluno.id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1, $idAluno, PDO::PARAM_INT);
        $listarCursosAluno = array();
              
          if ($stmt->execute()) {
             
              while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {
                  $objCursoAlunos = new CursoAlunos();
                  $objProfessor = new Professor();
                  $objCurso = new Curso();

                  $objCurso->setId($rs->id);
                  $objCurso->setNome($rs->nome);
                  $objCurso->setImg($rs->img);
                  $objCurso->setDescricao($rs->descricao);
                  $objCurso->setHashtag($rs->hashtag);
                  $objProfessor->setId($rs->idProfessor);
                  $objProfessor->setNome($rs->nomeProfessor);
                  $objCurso->setObjProfessor($objProfessor);



                  $objCursoAlunos->setObjCurso($objCurso);
                  
                  $listarCursosAluno[]=$objCursoAlunos;
              }

          } else {
              echo "Erro: Não foi possível recuperar os dados do banco de dados";
          }

          return $listarCursosAluno;

      } catch(PDOException $e) {
        
        echo 'Error: ' . $e->getMessage();
        return false;
      }

    }

   

   
   



}
    
    
    
    


	


?>