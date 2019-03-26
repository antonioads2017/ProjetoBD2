<?php
	require("mongoConnection.php");

	$db = connectionMongo();

	function cadastrarMongo($colecao,$documento){
		global $db;
		return $db->$colecao->insertOne($documento);
	}
	function buscarMongo($colecao,$documento){
		global $db;
		return $db->$colecao->findOne($documento);
	}
	function atualizarMongo($colecao,$novoDoc,$condicao){
		global $db;
		return $db->$colecao->updateOne($condicao,['$set' => $novoDoc]);
	}
	function removerMongo($colecao,$condicao){
		global $db;
		return $db->$colecao->deleteMany($condicao);
	}



?>