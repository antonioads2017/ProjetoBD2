<div class="header">
	<nav class="headerborder indigo"> 
		<div class="nav-wrapper">
			<a href="index.php" class="brand-logo headernav">AF Informática</a>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li><a class="waves-light red btn modal-trigger" href="meuPerfil.php">Meu perfil</a></li>
				<li><a class="waves-light red btn modal-trigger" href="#modal2">Meus pedidos</a></li>
				<li >
					<form method="POST" action="/services/logout.php">
						<button class="waves-light red btn" type="submit" name="action">Sair</button>
					</form>
				</li>
			</ul><br>

				<?php
				include ('carrinho.php')
				?>
				
		</div>
	</nav>
</div>