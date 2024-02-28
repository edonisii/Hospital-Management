<?php

	include_once('config.php');	


	if(isset($_POST['submit']))
	{

		$username = $_POST['username'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		$sql = "INSERT INTO contact(username, email, message) VALUES ( :username, :email,  :message)";

		$prep = $con->prepare($sql);
		$prep->bindParam(':username', $username);
		$prep->bindParam(':email', $email);
		$prep->bindParam(':message', $message);
		$prep->execute();

	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>HMS</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
		.signup h1{
			margin-left: %;
			display: block;
			margin-top:15%;
		}
	</style>

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="padding-right: 20%; margin-left: 15%;">Hospital Menagment System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
       
      </ul>
     
    </div>
  </div>
</nav>
	<div class="signup">
		<h1 >Your message has been successfully sent <a href="index.html">home</a></h1>

	
	</div>
	
</body>
</html>
