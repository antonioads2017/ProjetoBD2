<?php 
	session_start();
	require("../../databases/mongoDAO.php");
	$user = $_SESSION['logado'];


	$senha=$_POST['senha'];
	$nome=$_POST['nome'];
	$cpf=$_POST['cpf'];
	$nascimento=$_POST['nascimento'];
	$telefone=$_POST['telefone'];
	$sexo=$_POST['GENDER'];

	$novoDoc=[
		'email'=>$user,
		'senha'=>$senha,
		'nome'=>$nome,
		'cpf'=>$cpf,
		'nascimento'=>$nascimento,
		'telefone'=>$telefone,
		'sexo'=>$sexo,
	];

	atualizarMongo('usuario',$novoDoc,['email'=>$user]);
	header('location:../../meuPerfil.php');
?>