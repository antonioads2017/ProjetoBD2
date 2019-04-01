<?php 
	require ('databases/redisConnection.php');
	session_start();
	if(!isset($_SESSION['logado'])){
		unset($_SESSION['logado']);
		header('location:../index.php');
		 header("Cache-Control: no-cache, must-revalidate");
	}
	$logado = $_SESSION['logado']
	
?>