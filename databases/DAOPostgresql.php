<?php

require ("postgresConnection.php");

function inserir($dados){
	$connec = connection();
	$fields = implode("','",array_keys($dados));
	$user = "'".implode("','",$dados)."'";
	$sql_query = "INSERT INTO usuario ({$fields} VALUES ({$user}) )";
	$result = pg_query($connec,$sql_query);
	closeConnection($connec);

	if($result){
		return true;
	}else{
		return false;
	}
}
?>