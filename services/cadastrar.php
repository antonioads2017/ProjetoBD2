<?php 
	require("../databases/mongoDAO.php");
	session_start();

	$email=$_POST['email'];
	$senha=$_POST['senha'];
	$nome=$_POST['nome'];
	$cpf=$_POST['cpf'];
	$nascimento=$_POST['nascimento'];
	$telefone=$_POST['telefone'];
	$sexo=$_POST['GENDER'];

	$doc=[
		'email'=>$email,
		'senha'=>$senha,
		'nome'=>$nome,
		'cpf'=>$cpf,
		'nascimento'=>$nascimento,
		'telefone'=>$telefone,
		'sexo'=>$sexo,
	];
	if(!buscarMongo('usuario',['email'=>$email,])==null){
		$_SESSION['msg']="Ja existe usuario cadastrado nesse email";

	}else{
		$resultado = cadastrarMongo("usuario",$doc);

	}
	header('location:../index.php'); 

?>