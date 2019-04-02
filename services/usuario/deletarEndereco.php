<?php

ini_set('display_errors', true);
error_reporting(E_ALL);
require("../../databases/postgresConnection.php");
session_start();

$con = getConnection();
$logado = $_SESSION['logado'];
$idexclusao = $_POST['idexclusao'];
$query = "SELECT FROM endereco where id = '$idexclusao' AND logado = '$logado'";
$resultados = pg_query($con, $query);

if (empty(pg_num_rows($resultados))) {
	closeConnection($con);
	header('location:../../meusEnderecos.php');
}
else {
	$query = "DELETE FROM endereco where id = '$idexclusao'";
	pg_query($con, $query);
	closeConnection($con);
	header('location:../../meusEnderecos.php');
}




?>