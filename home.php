<!DOCTYPE html>
<html>
<head>

	<title>AF Informática</title>

	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link rel="stylesheet" type="text/css" media="screen,project" href="css/materialize.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="css/materialize.min.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	]
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
</head>
<body style="background-image: url(img/informatica-background-5.jpg)">

	

	<div class="header">
		<nav class="headerborder blue"> 
			<div class="nav-wrapper">
				<a href="index.php" class="brand-logo headernav">AF Informática</a>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a class="waves-light red btn modal-trigger" href="quemsomos.php">Quem Somos?</a></li>
					<li><a class="waves-light red btn modal-trigger" href="#modal1">Meu perfil</a></li>
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

	<div class="indexbody white"></div>

	<div id="modal1" class="modal">
		<div class="modal-content">
			<center>
				<div class="row">
					<form class="col10 s10" action="/services/autenticar.php" method="POST">
						<div class="row">
							<div class="input-field col10 s10">
								<input class="validate" id="email" type="email" name="email" required>
								<label for="email">E-mail</label>
							</div>
							<div class="input-field col10 s10">
								<input class="validate" id="email" type="password" name="senha" required>
								<label for="password">Senha</label>
							</div>
							<button class="btn waves-effect waves-light red" type="submit" name="action">Login</button>
						</div>
					</form>
				</div>
			</center>
		</div>
	</div>

	<div id="modal2" class="modal">
		<div class="modal-content">
			<center>
				<div class="row">
					<form class="col10 s10" action="/services/cadastrar.php" method="POST">
						<div class="row">
							<div class="input-field col10 s10">
								<input class="validate" id="nome" type="text" name="nome" required>
								<label for="nome">Nome</label>
							</div>
							<div class="input-field col10 s10">
								<input class="validate" id="email" type="email" name="email" required>
								<label for="email">E-mail</label>
							</div>
							<div class="input-field col10 s10">
								<input class="validate" id="email" type="password" name="senha" required>
								<label for="password">Senha</label>
							</div>
							<div class="input-field col10 s10">
								<input class="validate" id="cpf" type="text" name="cpf" required>
								<label for="cpf">CPF</label>
							</div>
							<div class="input-field col10 s10">
								<input class="validate" id="nascimento" type="date" name="nascimento" required>
								<label for="nascimento">Data de Nascimento</label>
							</div>
							<div class="input-field col10 s10">
								<input class="validate" id="telefone" type="text" name="telefone" required>
								<label for="telefone">Telefone</label>
							</div>
							<div class="input-field col10 s10">
								<p>
									<label>
										<input name="GENDER" type="radio" value="masculino" />
										<span>Masculino</span>
									</label>

									<label>
										<input name="GENDER" type="radio" value="feminino" />
										<span>Feminino</span>
									</label>
								</p>
							</div>
							<button class="btn waves-effect waves-light red" type="submit" name="action">Cadastrar
							</div>
						</form>
					</div>
				</center>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="js/materialize.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
		<script>
			$(document).ready(function(){
				$('.modal').modal();
			});

		</script>


	</body>
	</html>