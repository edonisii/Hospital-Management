<!DOCTYPE html>
<html>
<head>
  <title>HMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
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


<div class="signup">

  <form class="form-signin" action="signupAdminLogic.php" method="post">
    
    <h1 class="h3 mb-3 font-weight-normal">Doctors</h1>

    
    <input type="text" id="username" class="form-control" placeholder="fullname" name="fullname" required autofocus>

    <input type="email" id="fullname" class="form-control" placeholder="email" name="email" required autofocus>
    
    <input type="text" id="inputEmail" class="form-control" placeholder="username" name="username" required autofocus>

    
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>


<button class="btn btn-lg btn-success btn-block" type="submit" name="submit">  Sign up</button>

    <small>If you already have an account. Login <a href="login.php">here</a></small>
  </form>

  </div>

</body>
</html>