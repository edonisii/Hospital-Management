<?php

require'config.php';

if (empty($_SESSION['fullname'])) {
	header('Location:loginAdmin.php');

}
$sql="SELECT * from users";
$prep=$con->prepare($sql);
$prep->execute();
$datas=$prep->fetchAll();



//var_dump ($datas);die;
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Hospital</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Doctor</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="doctorDashboard.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Patients</span>
          </a>
        </li>
       
    
         <li>
          <a href="shikojRezervimet.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Appointments</span>
          </a>
        </li>
       
      
      
     
       
        <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
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

    <div >
      <table>
        <th>
          <td>edonis</td>
          <td>bislimi</td>
          <td>17</td>
        </th>
      </table>
    </div>

  <div class="home-content">
      
      <div class="sales-boxes">
        
        <div class="recent-sales box">
          <div class="title">Patients Table</div>
          <table class="table table-striped table-dark">
            <thead>
             <tr>
                  <th>#</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Doctor</th>
                 
                  </th>
                </tr>
            </thead>
            <tbody>
              <?php foreach ($datas as $data ):?> 
                <tr>
                <td><?=$data['id']?></td>	
                <td><?=$data['username']?></td>	
                <td><?=$data['email']?></td>	
                <td><?=$data['fullname']?></td>
               
                       </tr>
                    <?php endforeach; ?>
              
            </tbody>
          </table>

          <div class="sales-details">
          
          </div>
         
        </div>

       
    </div> 
    <div class=" col-md-5" id="searchDiv">
            <div>
              <h5>If you want to search for a specific patient medical history, click the button below</h5>
            </div>
          <div class=" col-md-5"  >
            <a href="search.php">
               <button id="searchButton">Search</button>
            </a>  
          </div>
                     
      </div>
 

  </section>

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
<script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
</body>
</html>