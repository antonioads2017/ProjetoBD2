<?php 
	require("../../databases/mongoDAO.php");
	require("../../controllers/sessionLogado.php");
	
	$endereco = $_POST['SELECT'];
	$pagamento=$_POST['SELECTPAY'];

	$numeroPedido = mt_rand();

	$total = 0;

	$produtos = listarMongo('carrinho');
	$nomeProdutos = '';
	$date = getdate();


	foreach ($produtos as $produto) {
		$total = $total+ ($produto['preco']*$produto['quantidade']);
		$nomeProdutos = $nomeProdutos.$produto['quantidade']."x - ".$produto['nome']." de R$".$produto['preco'].",00; ";
	}
	if($pagamento == 'Boleto Bancário'){
		$total=$total-($total*0.1);
	}

	$doc=[
		'usuario'=>$logado,
		'numeroPedido'=>$numeroPedido,
		'endereco'=>$endereco,
		'produtos'=>$nomeProdutos,
		'pagamento'=>$pagamento,
		'data'=>$date['mday']."/".$date['mon']."/".$date['year'],
		'total'=>$total,
	];

	cadastrarMongo('pedido',$doc);

	apagarColecao('carrinho');

	header('location:../../meusPedidos.php');






?>