<!DOCTYPE html>
<html>
<head>
	<title>Meus Endereços</title>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link rel="stylesheet" type="text/css" media="screen,project" href="css/materialize.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="css/materialize.min.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<?php 	
	require("services/usuario/listarEnderecos.php");
	require("controllers/sessionLogado.php");
	?>


</head>
<body>
	<?php 
	include ('headerLogged.php');
	session_start();
	?>
	<div class="indexbody">

		<div class="row">
			<div class="col s12"></div>
			<div class="col s12 m4 l2"></div>
			
			<div id="modalendereco" class="modal">
				<div class="modal-content">
					<center>
						<div class="row">
							<form action="/services/usuario/cadastrarEnderecos.php" method="POST">
								<div class="row">
									<div class="input-field col10 s10">
										<div class="map">
											<?php include ("googlemaps.php"); ?>
										</div>
									</div><br>
									<input type="text" id="latitude" name="latitude" value="">
									<input type="text" id="longitude" name="longitude" value="">
									<button class="btn waves-effect waves-light red" type="submit" name="action">Cadastrar endereço</button>
								</div>
							</form>
						</div>
					</center>
				</div>
			</div>

			<div class="col s12 m4 l12 headerborder">
				<h4 class="white-text center headerborder">Meus Endereços</h4>
				<div class="card headerborder">
					<div class="col s10 m5 l12 card-content grey lighten-4 headerborder">
						<div class="col s10 m5 l12 headerborder">
							<table class="responsive-table"><thead><tr><th>Rua</th><th>País</th><th>Estado</th><th>CEP</th><th>Endereço Completo</th></tr></thead>
							<?php listar($logado);?>
							</table><br>
							<a href="#modalendereco" class="waves-light btn modal-trigger" >Adicionar Endereço</a>
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
	<?php 
	include ('footer.php');
	include ('controllers/message.php')
	?>

	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="js/materialize.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script>
		$(document).ready(function(){
			$('.modal').modal();
		});

	</script>
	<?php require("services/usuario/cadastrarEnderecos.php"); ?>

</body>
</html>