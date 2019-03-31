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
	]
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<?php require("services/usuario/listarEnderecos.php");
	require("controllers/sessionLogado.php");?>
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
			<div class="col s12 m4 l12 ">
				<h4 class="white-text center">Meus Endereços</h4>
				<div class="card">
					<div class="card-content grey lighten-4">
						<div>
								<?php listar($logado);?>
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

</body>
</html>