<?php 
	require ("controllers/sessionLogado.php");
	
	$redis = new Redis();

	$redis->pconnect('127.0.0.1',6379);

	$produtos = $redis->get($logado);
?>
	<h5><?php echo $produtos?></h5>

	<?php foreach ($produtos as $produto => $value) {
		# code...
	}{
		?>
			<tr>
				<td><?php echo $value['_id']; ?></td>
				<td><?php echo $value['nome'];?></td>
				<td><?php echo $value['preco'];?></td>
			</tr>
	

	<?php
	}
?>