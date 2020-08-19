<?php
include_once "Professor.class.php"; 
class Curso{

	private $id;
	private $nome;
	private $img;
	private $descricao;
	private $hashtag;
	private $objProfessor;


    public function __construct(){
      $this->id = " ";
      $this->nome = " ";
      $this->img = " ";
      $this->descricao = " ";
	  $this->hashtag = " ";
	  $this->objProfessor = new Professor();

    }
    
    
   
    //get e set
	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getImg(){
		return $this->img;
	}

	public function setImg($img){
		$this->img = $img;
	}

	public function getDescricao(){
		return $this->descricao;
	}

	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}

	public function getHashtag(){
		return $this->hashtag;
	}

	public function setHashtag($hashtag){
		$this->hashtag = $hashtag;
	}

	public function getObjProfessor(){
		return $this->objProfessor;
	}

	public function setObjProfessor($objProfessor){
		$this->objProfessor = $objProfessor;
	}


}

?>