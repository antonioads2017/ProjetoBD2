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
<body>

	<?php
		session_start();

		if(isset($_SESSION['logado'])){
			header('location:home.php');
		}
		include ('header.php');

	?>    

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

		<footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text"><span><b>AF Informática</b></span></h5>
                <p class="grey-text text-lighten-4"><b>Somos um site pioneiro de Hardware e Periféricos, visado no custo por benefício e promoções que vão te deixar boquiaberta.</b></p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Developers</h5>
                <ul>
                  	<li><img src="img/edu.jpg" class="circle"><br>
                  		<span class="black-text">
	                		<b>Eduardo Lucas</b> Simpático, gosta de informática e development desde os seus 10 anos.
	              		</span><br>
                  	</li>
                  	<li><br><img src="img/tony.jpg" class="circle"><br>
                  		<span class="black-text">
	                		<b>Antonio Miguel</b> - Técnico em Informátiva ha 8 anos e boa experiência na área de hardware, analista e desenvolvedor de sistemas em andamento.
	              		</span>
                  	</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 AF Informática
            </div>
          </div>
        </footer>


	</body>
	</html>