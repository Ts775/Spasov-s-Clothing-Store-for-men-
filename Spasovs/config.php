<?php
	$servername = "localhost";
	$username = "genji";
	$password = "23062005";
	$database = "login_register";

	try {
	  $connection = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
	  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  
	} catch(PDOException $e) {
	  echo "Connection failed: " . $e->getMessage();
	}

?>