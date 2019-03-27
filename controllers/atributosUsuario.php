<?php 
	
	require("databases/mongoDAO.php");

	function buscarUsuario($user){
	$results = buscarMongo('usuario',['email'=>$user]);
		if(!$results==null){
			echo "<p><b>Nome completo: </b>" .$results['nome']."</p>
                        <p><b>Telefone: </b>" .$results['telefone']."</p>
                        <p><b>E-mail: </b>".$results['email']."</p>
                        <p><b>Nascimento: </b>" .$results['nascimento']."</p>
                        <p><b>Sexo: </b>".$results['sexo']."</p>
                        <p><b>CPF: </b>".$results['cpf']."</p>";

		}

	}
;

?>