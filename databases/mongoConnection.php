<?php
require_once __DIR__ . "/../vendor/autoload.php";

function connectionMongo(){
	$db = (new MongoDB\Client)->AFInfo;
	return $db;
}

?>