<?php 
	require("databases/mongoDAO.php");

	$pedidos = listarCMongo('pedido',['usuario'=>$logado]);

	foreach ($pedidos as $pedido) {?>
		<div class="col s12">
		<div class="card horizontal">
			<div class="card-content">
			<h6><b>Nº Pedido: <?php echo $pedido['numeroPedido']?>  </b><br>
				Data do Pedido: <?php echo $pedido['data']?></h6><br>
			<p>Produtos:</p>
			<p><b><?php echo $pedido['produtos']?></b></p><br>
			<p><b>Endereço de entrega:</b> <?php echo $pedido['endereco']?>.</p>
			<br><br>
			<h6><b>Total do Pedido: R$ <?php echo $pedido['total']?>,00</b><br>
				Forma de Pagamento: <?php echo $pedido['pagamento']?></h6>


		</div></div></div>

<?php	}

	

?>