<?php 
session_start();

if(session_destroy()){
	echo "deslogado com sucesso!";
	 header("Cache-Control: no-cache, must-revalidate");
	header('location:../../index.php');
}else{
	echo "Não foi possível deslogar!";
}


?>