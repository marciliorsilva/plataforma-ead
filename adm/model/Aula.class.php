<?php
include_once "Curso.class.php"; 
class Aula{

	private $id;
    private $titulo;
    private $data;
    private $hora;
	private $img;
	private $descricao;
	private $link;
	private $objCurso;


    public function __construct(){
      $this->id = " ";
      $this->titulo = " ";
      $this->img = " ";
      $this->data = " ";
      $this->hora = " ";
      $this->descricao = " ";
	  $this->link = " ";
	  $this->objCurso = new Curso();

    }
    
    
   
    //get e set
	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getTitulo(){
		return $this->titulo;
	}

	public function setTitulo($titulo){
		$this->titulo = $titulo;
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

	public function getLink(){
		return $this->link;
	}

	public function setLink($link){
		$this->link = $link;
    }
    
    public function getData(){
		return $this->data;
	}

	public function setData($data){
		$this->data = $data;
    }
    
    public function getHora(){
		return $this->hora;
	}

	public function setHora($hora){
		$this->hora = $hora;
	}

	public function getObjCurso(){
		return $this->objCurso;
	}

	public function setObjCurso($objCurso){
		$this->objCurso = $objCurso;
	}


}

?>