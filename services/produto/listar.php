<?php 
require("databases/mongoDAO.php");

$cursor = listarMongo("produto");

if($cursor!=null){
	foreach ($cursor as $doc) {
		$nome = $doc['nome'];
		$id = $doc['_id'];
		$preco = $doc['preco'];
		$descricao = $doc['descricao'];
		echo '
		<div class="col s12 m6">
		<div class="card horizontal">
		<div class="card-image">
		<img src="img/z390_aorus_elite.png">
		</div>
		<div class="card-content">
		<span> Codigo: '.$id.'</span>
		<h5><b>'.$nome.'</b></h5>
		<p><b>Preço: R$ '.$preco.',00</b></p>
		<span>'.$descricao.'</span>
		</div>

		<a class="btn-floating right halfway-fab waves-effect waves-light red"><i class="material-icons">add_shopping_cart</i></a>
		</div>
		</div>'
		;
	}
}





?>