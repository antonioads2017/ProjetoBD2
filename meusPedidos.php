r<!DOCTYPE html>
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
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<?php require ("controllers/sessionLogado.php");
	?>

</head>
<body>
	<?php 
	
	include ('headerLogged.php');
	header("Cache-Control: no-cache, must-revalidate");
	
	?>
	<div class="indexbody">
		<div class="row">
		<h4 class="white-text center">Meus Pedidos</h4>
		<?php include ("services/pedido/listar.php") ?>
	</div></div>
	<?php 
	include ('footer.php');
	include('controllers/message.php');
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



</body>
</html>