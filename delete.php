<?php 

	include_once("config.php");

	$id = $_GET['id'];

	// var_dump($id);

	$sql = "DELETE FROM users WHERE id=:id";

	$prep = $con->prepare($sql);
	$prep->bindParam(':id', $id);
	$prep->execute();


	
	$id = $_GET['id'];

	// var_dump($id);

	$sql = "DELETE FROM doktorrat WHERE id=:id";

	$prep = $con->prepare($sql);
	$prep->bindParam(':id', $id);
	$prep->execute();

	$sql = "DELETE FROM image WHERE id=:id";

	$prep = $con->prepare($sql);
	$prep->bindParam(':id', $id);
	$prep->execute();
    



	$sql = "DELETE FROM contact WHERE id=:id";

	$prep = $con->prepare($sql);
	$prep->bindParam(':id', $id);
	$prep->execute();
    header('Location:admindashboard.php');


		
?>