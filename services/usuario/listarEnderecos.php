<?php 
require("databases/postgresConnection.php");

function listar ($logado){
	$con = getConnection();

	$query = "SELECT * FROM endereco WHERE logado = '$logado'";
	$resultados = pg_query($con,$query);
	closeConnection($con);
	if(!empty(pg_num_rows($resultados))){
		while($resultado = pg_fetch_assoc($resultados)) {
			echo '<table><tr><td class="listaendereco">'.$resultado['country'].'</td><td class="listaendereco">'.$resultado['province'].'</td><td class="listaendereco">'.$resultado['city'].'</td><td class="listaendereco">'.$resultado['street'].'</td><td class="listaendereco">'.$resultado['postal_code'].'</td><td class="listaendereco">'.$resultado['country_code'].'</td><td class="listaendereco">'.$resultado['formatted_address'].'</td></tr></table><br>';
		}

	}else{
		echo '<h6>Não há endereços cadastrados</h6><br>';
	}
	

}

?>