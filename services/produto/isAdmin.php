<?php 
	
	function admin($user){
		$result = buscarMongo('usuario',['email'=>$user]);
		if($result['admin']=='true'){
		  echo '<a class="modal-trigger waves-effect waves-light btn" href="#modal3" >Cadastrar produto </a><br><br><a class="modal-trigger waves-effect waves-light btn" href="#modal4" >Solicitar Exclusão</a>';
		}
	}	
	;
?>