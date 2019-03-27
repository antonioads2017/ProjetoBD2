<?php 
class Usuario{
	public $email;
	public $nome;
	public $senha;
	public $nascimento;
	public $cpf;
	public $telefone;
	public $sexo;

	public function __construct($email,$nome,$senha,$nascimento,$cpf,$telefone,$sexo){
		$this->email=$email;
		$this->nome=$nome;
		$this->senha=$senha;
		$this->nascimento=$nascimento;
		$this->cpf=$cpf;
		$this->telefone=$telefone;
		$this->sexo=$sexo;
	}
}
?>