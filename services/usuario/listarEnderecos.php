<?php 
require("databases/postgresConnection.php");

function listar ($logado){
	$con = getConnection();

	$query = "SELECT * FROM endereco WHERE logado = '$logado'";
	$resultados = pg_query($con,$query);
	closeConnection($con);
	if(!empty(pg_num_rows($resultados))){
		while($resultado = pg_fetch_assoc($resultados)) {
			echo '<h6 class="z-depth-2">'.$resultado['endereco'].'</h6>';
		}

	}else{
		echo '<h6>Não endereços cadastrados';
	}
	

}



?>