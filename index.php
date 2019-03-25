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

	<link rel="stylesheet" type="text/css" href="css/header.css">

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>
<body>
	<nav> 
		<div class="nav-wrapper">
			<a href="index.php" class="brand-logo left" >AF Informática</a>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li><a class="waves-light red btn modal-trigger" href="sass.html">Quem Somos?</a></li>
				<li><a class="waves-light red btn modal-trigger" href="badges.html">Políticas do Site</a></li>
				<li><a class="waves-light red btn modal-trigger" href="#modal1">Login</a></li>
				<li><a class="waves-light red btn modal-trigger" href="#modal2">Cadastrar-se</a></li>
			</ul>
		</div>
	</nav>

	<div id="modal1" class="modal">
		<div class="modal-content">
			<center>
				<div class="row">
					<form class="col10 s10" action="" method="">
						<div class="row">
							<div class="input-field col10 s10">
								<input class="validate" id="email" type="email" required>
								<label for="email">E-mail</label>
							</div>
							<div class="input-field col10 s10">
								<input class="validate" id="email" type="password" required>
								<label for="password">Senha</label>
							</div>
							<button class="btn waves-effect waves-light red">Login</button>
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
					<form class="col10 s10" action="" method="">
						<div class="row">
							<div class="input-field col10 s10">
								<input class="validate" id="nome" type="text" required>
								<label for="nome">Nome</label>
							</div>
							<div class="input-field col10 s10">
								<input class="validate" id="email" type="email" required>
								<label for="email">E-mail</label>
							</div>
							<div class="input-field col10 s10">
								<input class="validate" id="email" type="password" required>
								<label for="password">Senha</label>
							</div>
							<div class="input-field col10 s10">
								<input class="validate" id="cpf" type="text" required>
								<label for="cpf">CPF</label>
							</div>
							<div class="input-field col10 s10">
								<input class="validate" id="nascimento" type="date" required>
								<label for="nascimento">Data de Nascimento</label>
							</div>
							<div class="input-field col10 s10">
								<input class="validate" id="telefone" type="text" required>
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