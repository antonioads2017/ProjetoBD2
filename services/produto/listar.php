<?php 
require("databases/mongoDAO.php");

$cursor = listarMongo("produto");

if($cursor!=null){
	foreach ($cursor as $doc) {?>
		<div class="col s12 m6">
		<div class="card horizontal">
		<div class="card-image">
		<img src="img/embalagem_de_produto223_1_.png">
		</div>
		<div class="card-content">
		<span><?php echo "<b>Codigo:</b>".$doc['_id'];?></span>
		<h5><b><?php echo $doc['nome'];?></b></h5>
		<p><b>Preço: R$ <?php echo $doc['preco'];?>,00</b></p>
		<span><?php echo $doc['descricao'];?></span>
		</div>

		<a class="btn-floating right halfway-fab waves-effect waves-light red" href="services/carrinho/adicionar.php?produto=<?php echo $doc['_id']?>" name="produto"><i class="material-icons">add_shopping_cart</i></a>
		</div>
		</div>
		<?php
	}
}?>





