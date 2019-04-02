<?php 
	require ("controllers/sessionLogado.php");
	require("databases/mongoDAO.php");


	$produtos = listarMongo('carrinho');

	foreach ($produtos as $produto) {
		?>
			<tr>
				<td><?php echo $produto['id']; ?></td>
				<td><?php echo $produto['nome'];?></td>
				<td>R$ <?php echo $produto['preco'];?></td>
				<td><?php echo $produto['quantidade'];?></td>
				<td>R$ <?php echo $produto['preco']*$produto['quantidade'];?></td>

			</tr> <?php $total = $total + $produto['preco']*$produto['quantidade']; ?>
	 		

	<?php
	}?> <tr><td colspan="4"><h5>R$ <?php echo $total?> à Vista</h5><p>ou em 10x de R$ <?php echo $total/10?></p></td></tr> </table>
		
