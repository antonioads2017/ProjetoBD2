<?php
	require ('../../databases/redisConnection.php');
	require("../../databases/mongoDAO.php");
	session_start();

	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$doc = [
		'email'=>$email,
		'senha'=>$senha,

	];
	$resultado = buscarMongo('usuario',$doc);

	if(!$resultado==null){
		$_SESSION['logado']=$email;
		header('location:../../home.php');
		
	}else{
		header('location:../../index.php');
		$_SESSION['msg']="Usuario e senha invalido";

	}

?>