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
	<?php 
		include ('headerLogged.php');
	?>

	<div class="indexbody">
        <div class="produto">
        	
  			<div>
    			<div class="s12 m3">
      				<div class="card">
        				<div class="card-image">
          					<img src="img/z390_aorus_elite.png"><br>
        				</div>
        				<div class="card-content">
        					<span class="card-title">Z390 Aorus Elite</span>
        					<br>
          					<p>Preço cartão: R$ 1.745,54</p>
          					<br>
          					<p>A vista (com desconto): R$ 1.437,68</p>
          					<br>
          					<a class="btn-floating left halfway-fab waves-effect waves-light red modal-trigger" href="#modal1"><i class="material-icons">add</i></a>
          					<a class="btn-floating right halfway-fab waves-effect waves-light red"><i class="material-icons">add_shopping_cart</i></a>
        				</div>
      				</div>
    			</div>
  			</div>
            
        </div>
    </div>

  	<!-- Modal Structure -->
  	<div id="modal1" class="modal modal-fixed-footer">
    	<div class="modal-content">
      		<h4>tem que colocar o nome do produto aq vou pesquisar como faz isso</h4>
      		<p>tem que colocar os detalhes do produto aq vou pesquisar como faz isso</p>
    	</div>
    	<div class="modal-footer">
      		<a href="#!" class="modal-close waves-effect waves-green btn-flat">Comprar</a>
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

			<?php 
			include ('footer.php');
			?>

	</body>
	</html>