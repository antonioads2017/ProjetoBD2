<?php 
	require("../../databases/mongoDAO.php");
	session_start();

	$codigo = $_POST['codigo'];

	if(!buscarMongo('produto',['_id'=>$codigo])==null){
		removerMongo('produto',['_id'=>$codigo]);
		$_SESSION['msg']="Produto excluído com sucesso";
		header('location:../../meuPerfil.php');
	}else{
		
		$_SESSION['msg']="Codigo incorreto ou produto nao existe!";
		header('location:../../meuPerfil.php');
	}


?>