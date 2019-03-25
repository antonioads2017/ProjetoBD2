<?php
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
		header('location:#');
	}else{
		header('location:../index.php');
	}

?>