<?php 
	require("../../databases/mongoDAO.php");
	session_start();

	$codigo = $_POST['codigo'];

	if(!buscarMongo('produto',['_id'=>$codigo])==null){
		removerMongo('produto',['_id'=>$codigo]);
		header('location:../../meuPerfil.php');
		$_SESSION['msg']="Produto excluído com sucesso";
	}else{	
		header('location:../../meuPerfil.php');
		$_SESSION['msg']="Codigo incorreto ou produto nao existe!";
	}


?>