<?php

require'config.php';

if (empty($_SESSION['fullname'])) {
	header('Location:loginAdmin.php');

}
$sql="SELECT * from doktorrat";
$prep=$con->prepare($sql);
$prep->execute();
$datas=$prep->fetchAll();



//var_dump ($datas);die;
?>
         
<!DOCTYPE html>
<html>
<head>
	<title>HMS</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">

		<style type="">
			
			.signup{
				border: 3px black solid;
				width: 50%;
				height: 30%;
				margin-left: 20%;
				margin-top: 5%;
			}

			.form-control{
				margin-bottom: 3%;
			}
			
			.card{
				width: 50%;
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
          <a class="nav-link" href="#">Contact</a>
        </li>
       
      </ul>
     
    </div>
  </div>
</nav>




<div class="container mt-5 mb-5 d-flex justify-content-center">

<div class="card px-1 py-4"> 
	<form class="card-body" action="rezervimetLogic.php" method="post">
		
		<h1 class="h3 mb-3 font-weight-normal">Book Appointment </h1>
		<h6 class="information mt-4">Please provide following information</h6>	
		<input type="text" id="username" class="form-control" placeholder="username" name="username" required autofocus>
		<input type="email" id="email" class="form-control" placeholder="email" name="email" required autofocus>
             <?php foreach ($datas as $data ):?> 
        <input type="radio" id="doktorri" name="doktorri" value="<?=$data['username']?>"><?=$data['username']?></input>
         <?php endforeach; ?>
        
    		
		<input type="data" id="data" class="form-control" placeholder="data" name="data" required>
		<input type="time" id="inputtime" class="form-control" placeholder="time" name="time" required>
		<div class=" d-flex flex-column text-center px-5 mt-3 mb-3">
			 <small class="agree-text">By Booking this appointment you agree to the</small> 
			 <a href="#" class="terms">Terms & Conditions</a> </div>
			 
		<button class="btn btn-primary btn-block confirm-button" type="submit" name="submit"> Confirm</button>	
	</form>
</div>
</div>

</body>
</html>