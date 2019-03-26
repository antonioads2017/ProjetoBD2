	<link rel="stylesheet" type="text/css" href="css/header.css">

	<div class="header">
		<nav class="headerborder blue"> 
			<div class="nav-wrapper">
				<a href="index.php" class="brand-logo headernav">AF Informática</a>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a class="waves-light red btn modal-trigger" href="quemsomos.php">Quem Somos?</a></li>
					<li><a class="waves-light red btn modal-trigger" href="#modal1">Meu perfil</a></li>
					<li><a class="waves-light red btn modal-trigger" href="#modal2">Meus pedidos</a></li>
					<li class="form-inline my-2 my-lg-0" method="post" action="/services/logout.php">
						<a class="waves-light red btn modal-trigger" type="submit" name="action">Sair</a>
					</li>
				</ul><br>
				<?php
				include ('carrinho.php')
				?>
				
			</div>
		</nav>
	</div>