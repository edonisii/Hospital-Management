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

	<form class="form-signin" action="contactLogic.php" method="post">
		
		<h1 class="h3 mb-3 font-weight-normal">Contact Us</h1>

		
		<input type="text" id="username" class="form-control" placeholder="username" name="username" required autofocus>

		<input type="email" id="email" class="form-control" placeholder="email" name="email" required autofocus>

	

		<input type="text" id="message" class="form-control" placeholder="message" name="message" required autofocus>
		
		
		<a href="">
			<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Submit</button>
		</a>
		

		
	</form>

	

  </div>

</body>
</html>