<?php 
class Aluno{

    private $id;
    private $nome;
    private $email;
	private $senha;
    private $loginAtivo;
    private $bloqueado;
	

    public function __construct(){
        $this->id = " ";
        $this->nome = " ";
        $this->email = " ";
        $this->senha = " ";
        $this->loginAtivo = " ";
        $this->bloqueado = " ";
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


	public function getLoginAtivo(){
		return $this->loginAtivo;
	}

	public function setLoginAtivo($loginAtivo){
		$this->loginAtivo = $loginAtivo;
    }
    
    public function bloqueado(){
		return $this->bloqueado;
	}

	public function setBloqueado($bloqueado){
		$this->bloqueado = $bloqueado;
	}

}

?>