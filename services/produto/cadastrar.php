<?php 
require("../../databases/mongoDAO.php");
session_start();
	$codigo = $_POST['codigo'];
	$nome = $_POST['nome'];
	$descricao = $_POST['descricao'];
	$preco = $_POST['preco'];

	$doc=[
		'_id'=>$codigo,
		'nome'=>$nome,
		'descricao'=>$descricao,
		'preco'=>$preco,
	];
	if(!buscarMongo('produto',['_id'=>$codigo])==null){
		$_SESSION['msg']="Ja existe produto cadastrado com esse codigo";

	}else{
		$resultado = cadastrarMongo("produto",$doc);

	
}
	header('location:../../meuPerfil.php');

?>