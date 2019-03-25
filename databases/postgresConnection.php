<?php
	
	function connection(){
		try {
			$connec = pg_connect("host=127.0.0.1 port=5432 dbname=AFInfo user=postgres password=28041998");
			return $connec;
		} catch (Exception $e) {
			echo $e->me;
		}
	}

	function closeConnection($connec){
		try {
			pg_close($connec)
		} catch (Exception $e) {
			echo $e->me;
		}
	}


?>