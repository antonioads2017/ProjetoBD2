<?php 

	require ("../controllers/sessionLogado.php");
	require("databases/mongoDAO.php");
	if(excluirMongo('usuario',['email',$logado])){
		session_destroy();
		header('location:../../index.php');
	}

?>