<?php
// ini_set('display_errors', true);
// error_reporting(E_ALL);
require("databases/postgresConnection.php");
session_start();

$con = getConnection();
$lat = (String)$_POST['latitude'];
$lon = (String)$_POST['longitude'];
$logado = $_SESSION['logado'];

function Get_Address_From_Google_Maps($lat, $lon) {



	$url = "https://maps.googleapis.com/maps/api/geocode/json?latlng=$lat,$lon&key=AIzaSyClZO-6azxa5SPpFYmEsp7rb1VFKQG88qE";

	// Make the HTTP request
	$data = @file_get_contents($url);
	// Parse the json response
	$jsondata = json_decode($data,true);

	// If the json data is invalid, return empty array
	if (!check_status($jsondata)){
		echo "ta retornando vazio";
		return array();
	}
	else{
		$address = array(
			'country' => google_getCountry($jsondata),
			'province' => google_getProvince($jsondata),
			'city' => google_getCity($jsondata),
			'street' => google_getStreet($jsondata),
			'postal_code' => google_getPostalCode($jsondata),
			'country_code' => google_getCountryCode($jsondata),
			'formatted_address' => google_getAddress($jsondata),
		);

		return $address;
	}
	
}

	/* 
	* Check if the json data from Google Geo is valid 
	*/

	function check_status($jsondata) {
		if ($jsondata["status"] == "OK") return true;
		return false;
	}

	/*
	* Given Google Geocode json, return the value in the specified element of the array
	*/

	function google_getCountry($jsondata) {
		return Find_Long_Name_Given_Type("country", $jsondata["results"][0]["address_components"]);
	}
	function google_getProvince($jsondata) {
		return Find_Long_Name_Given_Type("administrative_area_level_1", $jsondata["results"][0]["address_components"], true);
	}
	function google_getCity($jsondata) {
		return Find_Long_Name_Given_Type("locality", $jsondata["results"][0]["address_components"]);
	}
	function google_getStreet($jsondata) {
		return Find_Long_Name_Given_Type("street_number", $jsondata["results"][0]["address_components"]) . ' ' . Find_Long_Name_Given_Type("route", $jsondata["results"][0]["address_components"]);
	}
	function google_getPostalCode($jsondata) {
		return Find_Long_Name_Given_Type("postal_code", $jsondata["results"][0]["address_components"]);
	}
	function google_getCountryCode($jsondata) {
		return Find_Long_Name_Given_Type("country", $jsondata["results"][0]["address_components"], true);
	}
	function google_getAddress($jsondata) {
		return $jsondata["results"][0]["formatted_address"];
	}

	/*
	* Searching in Google Geo json, return the long name given the type. 
	* (If short_name is true, return short name)
	*/

	function Find_Long_Name_Given_Type($type, $array, $short_name = false) {
		foreach( $array as $value) {
			if (in_array($type, $value["types"])) {
				if ($short_name)    
					return $value["short_name"];
				return $value["long_name"];
			}
		}

	}

	$arrayendereco = Get_Address_From_Google_Maps($lat, $lon);

	$country = $arrayendereco['country'];
	$province = $arrayendereco['province'];
	$city = $arrayendereco['city'];
	$street = $arrayendereco['street'];
	$postalcode = $arrayendereco['postal_code'];
	$countrycode = $arrayendereco['country_code'];
	$formattedaddress = $arrayendereco['formatted_address'];

	echo "<pre>";
	print_r($arrayendereco);
	echo "</pre>";


	$query = "INSERT INTO endereco(logado, country, province, city, street, postal_code, country_code, formatted_address) VALUES('$logado', '$country', '$province', '$city', '$street', '$postalcode', '$countrycode', '$formattedaddress')";
	pg_query($con, $query);
	closeConnection($con);
	header('location:../../meusEnderecos.php');










	?>