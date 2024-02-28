
<?php 
	error_reporting(0);
	session_start();

	$host = 'localhost';
	$db = 'ncf';
	$user = 'root';
	$pass = '';
	

	try {
		
		$con = new PDO("mysql:host=$host;dbname=$db", $user, $pass);


	} catch (Exception $e) {
		
		echo "Not connected";
	}


 ?>


