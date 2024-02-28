<?php

require 'config.php';

if (empty($_SESSION['fullname'])) {
	header('Location:loginUser.php');

}





//var_dump ($datas);die;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name"><a class="navbar-brand col-sm-3 col-md-2 nr-0" href="#"><?=$_SESSION['fullname']?></a></span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="test.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dostors</span>
          </a>
        </li>
        <!--
              <li>
          <a href="#">
            <i class='bx bx-box' ></i>
            <span class="links_name">Product</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-heart' ></i>
            <span class="links_name">Favrorites</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Stock</span>
          </a>
        </li>
          <li>
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Total order</span>
          </a>
        </li>

        <li>
          <a href="#">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Patients</span>
          </a>
        </li>
<li>
          <a href="registerUsers.php">
            <i class='bx bx-user' ></i>
            <span class="links_name">Add User</span>
          </a>
        </li>
  <li>
          <a href="#">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Add Docotr</span>
          </a>
        </li> 
        

        -->
        <li>
          <a href="shikojRezervimetUser.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">My Appointments</span>
          </a>
        </li>
       
       <li>
          <a href="medicalDashboard.php">
            <i class='bx bx-message' ></i>
            <span class="links_name">Medical History</span>
          </a>
        </li>
    
        <li class="log_out">
          <a href="index.html">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      
    
    </nav>
    <div class="home-content d-flex">
    <h1>/</h1>
    <?php
     
     $stmt = $con->prepare('select * from image');
     $stmt->execute();
     $imagelist = $stmt->fetchAll();
   
     foreach($imagelist as $image) {
     ?>
         
         <div class="card " style="width: 18rem;">
         
           <img src="<?=$image['image']?>"
         title="<?=$image['name'] ?>"
         width='285' height='200'>
       
        
 
   <div class="card-body">
   <h1>EDONIS</h1>
     <a href="rezervimet.php" class="btn btn-primary" style="margin-left:15%;">Book Appointment</a>
   </div>
 </div>
     
     <?php
     }
     ?>
    </div>
    <script>
        let sidebar = document.querySelector(".sidebar");
     let sidebarBtn = document.querySelector(".sidebarBtn");
     sidebarBtn.onclick = function() {
       sidebar.classList.toggle("active");
       if(sidebar.classList.contains("active")){
       sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
     }else
       sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
     }
      </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
