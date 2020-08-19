<?php
include_once "Curso.class.php";
include_once "Aluno.class.php"; 
class CursoAlunos{

	private $id;
    private $objAluno;
	private $objCurso;


    public function __construct(){
      $this->id = " ";
      $this->objAluno = new Aluno();
	  $this->objCurso = new Curso();

    }
    
     //get e set
	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}
   
    public function getObjAluno(){
		return $this->objAluno;
	}

	public function setObjAluno($objAluno){
		$this->objAluno = $objAluno;
	}
	public function getObjCurso(){
		return $this->objCurso;
	}

	public function setObjCurso($objCurso){
		$this->objCurso = $objCurso;
	}


}

?>