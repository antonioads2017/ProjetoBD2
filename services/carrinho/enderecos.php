<?php 
	require("databases/postgresConnection.php");

	$con = getConnection();
	$query = "SELECT formatted_address FROM endereco WHERE logado = '$logado'";
	$resultados = pg_query($con,$query);
	closeConnection($con);
	while($resultado = pg_fetch_assoc($resultados)){
		?>
		<option><?php  echo $resultado['formatted_address']?></option>

	<?php
}

?>