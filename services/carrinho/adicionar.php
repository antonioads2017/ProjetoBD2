<?php 
	require("../../databases/mongoDAO.php");
	require ("../../controllers/sessionLogado.php");
	
	$redis = new Redis();

	$redis->pconnect('127.0.0.1',6379);


	$id = $_GET['produto'];

	$docProduto = buscarMongo('produto',['_id'=>$id]);
	
	if($redis->get($logado)==null){
		$redis->setEx($logado,1000,json_encode($docProduto));
	}else{
		$redis->append($logado,json_encode($docProduto));
	}

	header('location:../../home.php');
	
?>