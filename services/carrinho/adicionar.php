<?php 
	require("../../databases/mongoDAO.php");
	require("../../databases/redisConnection.php");

	$id = $_GET['produto'];

	$docProduto = buscarMongo('produto',['_id'=>$id]);

	$doc=[
		'_id'=>$docProduto['_id'],
		'nome'=>$docProduto['nome'],
		'preco'=>$docProduto['preco'],
	];

	


?>