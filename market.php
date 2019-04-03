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
   ?>

</head>
<body style="background-image: url(img/informatica-background-5.jpg)">
  	<?php 
    header("Cache-Control: no-cache, must-revalidate");

    include ('headerLogged.php');
    include('controllers/message.php');
    ?> 

    <div class="indexbody">
      <div class="row">
      <div class="col s12"></div>
      <div class="col s12 m4 l2"></div>
      <div class="col s12 m4 l12 ">
        <h4 class="white-text center">Meu Carrinho</h4>
        <div class="card">
          <div class="card-content grey lighten-4">
            <a class="btn waves-effect waves-light red" href="services/carrinho/apagarCarrinho.php">Apagar Carrinho</a>
            <table class="responsive-table">
                <thead>
                  <tr>
                    <td><b>ID</b></td>
                    <td><b>Nome</b></td>
                    <td><b>Preço</b></td>
                    <td><b>Quantidade</b></td>
                    <td><b>Subtotal</b></td>
                  </tr>
                </thead>
                <?php include("services/carrinho/listar.php");?>
                <form action="/services/pedido/fazerPedido.php" method="POST">
                  <p>Selecione seu endereço</p>
                <select class="browser-default" name="SELECT">
                     <?php include("services/carrinho/enderecos.php");?>
                </select><br>
                <p>Selecione forma de pagamento</p>
                <select class="browser-default" name="SELECTPAY">
                     <option>Cartão de Credito</option>
                     <option>Boleto Bancário</option>
                     <option>Depósito</option>
                </select><br>

                <button type="submit" name="action" class="btn waves-effect waves-light">Fechar Pedido</button>
           </form>
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