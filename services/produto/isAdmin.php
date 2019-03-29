<?php 
	
	function admin($user){
		$result = buscarMongo('usuario',['email'=>$user]);
		if($result['admin']=='true'){
		  echo '<a class="modal-trigger" href="#modal3" >Cadastro de Produtos</a>';
		}
	}	
	;
?>