<?php 
require("../../databases/mongoDAO.php");
require ("../../controllers/sessionLogado.php");

apagarColecao('carrinho');

header('location:../../market.php');


?>