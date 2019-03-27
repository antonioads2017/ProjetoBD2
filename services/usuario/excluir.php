<?php 

	session_start();
	require("../../databases/mongoDAO.php");
	$logado = $_SESSION['logado'];
	if(removerMongo('usuario',['email'=>$logado])){
		session_destroy();
		header('location:../../index.php');
	}

?>