<?php 
require("../../databases/mongoDAO.php");
require ("../../controllers/sessionLogado.php");


$id = $_GET['produto'];




$doc=buscarMongo('carrinho',['id'=>$id]);
if(buscarMongo('carrinho',['id'=>$doc['id']])!=null){
	$docNovo=[
		'id' => $doc['id'],
		'nome'=>$doc['nome'],
		'preco'=>$doc['preco'],
		'quantidade'=>$doc['quantidade']+1,
	];
	atualizarMongo('carrinho',$docNovo,['id'=>$doc['id']]);
}else{
	$docProduto = buscarMongo('produto',['_id'=>$id]);
	$doc = [
	'id' => $docProduto['_id'],
	'nome'=>$docProduto['nome'],
	'preco'=>$docProduto['preco'],
	'quantidade'=>1,
];
	cadastrarMongo('carrinho',$doc);
}






header('location:../../home.php');

?>