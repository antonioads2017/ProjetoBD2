<?php 

	function getConnection(){
	try{
		$conexao = pg_connect("host=127.0.0.1 port=5432 dbname=AFInfo user=postgres password=28041998");
		return $conexao;
	}catch(Exception $e){
		echo $e->me;
	}	
}
function closeConnection($con){
	try{
		pg_close($con);
	}catch(Exception $e){
		echo $e->me;
	}
}

?>