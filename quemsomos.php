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

</head>
<body style="background-image: url(img/informatica-background-5.jpg)">

	<?php

		$IsLogged = false;

  		if($IsLogged) {

  			include ('headerlogged.php');

  		} else {

  			include ('header.php');

  		}
	?>

	<div class="indexbody white">
		<p class="text"> <b>Somos um site pioneiro de Hardware e Periféricos, visado no custo por benefício e promoções que vão te deixar boquiaberta.</b></p>
		<div class="col s12 m8 offset-m2 l6 offset-l3">
	        <div class="card-panel grey lighten-5 z-depth-1">
	          	<div class="row valign-wrapper">
	            	<div class="col s2">
	              		<img src="img/tony.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
	            	</div>
	            	<div class="col s10">
	              		<span class="black-text">
	                		<b>Antonio Miguel</b> - Técnico em Informátiva ha 8 anos e boa experiência na área de hardware, analista e desenvolvedor de sistemas em andamento.
	              		</span>
	            	</div>
	          	</div>
	        </div>
	    </div>
	    <div class="col s12 m8 offset-m2 l6 offset-l3">
	        <div class="card-panel grey lighten-5 z-depth-1">
	          	<div class="row valign-wrapper">
	            	<div class="col s2">
	              		<img src="img/edu.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
	            	</div>
	            	<div class="col s10">
	              		<span class="black-text">
	                		<b>Eduardo Lucas</b> Simpático, gosta de informática e development desde os seus 10 anos.
	              		</span>
	            	</div>
	          	</div>
	        </div>
	    </div>
	</div>

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