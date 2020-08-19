<?php 
class Administrador{

    private $id;
    private $nome;
    private $email;
	private $senha;
	private $loginAtivo;
	

    public function __construct(){

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
    
    public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getSenha(){
		return $this->senha;
	}

	public function setSenha($senha){
		$this->senha = $senha;
	}


	public function loginAtivo(){
		return $this->loginAtivo;
	}

	public function setLoginAtivo($loginAtivo){
		$this->loginAtivo = $loginAtivo;
	}

}

?>