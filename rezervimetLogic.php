<?php

	include_once('config.php');	


	if(isset($_POST['submit']))
	{

		$username = $_POST['username'];
		$email = $_POST['email'];
		$doktorri = $_POST['doktorri'];
		$data = $_POST['data'];
		$time = $_POST['time'];



		$sql = "INSERT INTO rezervimet(username, email, doktorri, data, time) VALUES ( :username, :email, :doktorri, :data, :time)";

		$prep = $con->prepare($sql);
					

					
		$prep->bindParam(':username', $username);
		$prep->bindParam(':email', $email);
		$prep->bindParam(':doktorri', $doktorri);
		$prep->bindParam(':data', $data);
		$prep->bindParam(':time', $time);
		$prep->execute();

		header('Location:test.php');	
  		

		}
				


?>
