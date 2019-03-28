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
	<?php require ("controllers/sessionLogado.php");
	require ("controllers/atributosUsuario.php"); ?>
</head>
<body>
	<?php 
	session_start();
	include ('headerLogged.php');
	

	?>
	<div class="indexbody">

		<div class="row">
			<div class="col s12"></div>
			<div class="col s12 m4 l2"></div>
			<div class="col s12 m4 l12 ">
				<h4 class="white-text center">Meu Perfil</h4>
				<div class="card">
					<div class="card-content grey lighten-4">
						<div id="dados">
							<?php buscarUsuarioPerfil($logado)?>

						</div>
						<div id="settings"><h5>Configuração da conta:</h5>
							<a class="modal-trigger" href="#md2">Editar dados</a><br>
							<a class="modal-trigger" href="#md1" >Desativar conta</a><br>
							<!-- <a href="admin/gerencia.jsp">Gêrencia de Usuários</a> -->
						</div>
						</div>
					</div>
				</div>
				<div id="md1" class="modal">
                <div class="modal-content">
                    <h4>Por favor, confirme</h4>
                    <p>Deseja continuar com esta ação?</p>
                </div>
                <div class="modal-footer">
                    <a href="#!" class="modal-close btn">Não</a>
                    <a href="/services/usuario/excluir.php"
                       class="waves-effect waves-green red btn-flat center-align" id="md1_YesBtn">Sim</a>
                </div>
            </div>

			</div>
		</div>
		<div id="md2" class="modal">
		<div class="modal-content">
			<center>
				<div class="row">
					<form class="col10 s10" action="/services/usuario/editar.php" method="POST">
						<div class="row">
							<div class="input-field col10 s10">
								<input class="validate" id="nome" type="text" name="nome" required>
								<label for="nome"></label>
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
							<button class="btn waves-effect waves-light red" type="submit" name="action">Editar
							</div>
						</form>
					</div>
				</center>
			</div>
		</div>
	</body>
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="js/materialize.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
		<script>
			$(document).ready(function(){
				$('.modal').modal();
			});

		</script>
	</html>