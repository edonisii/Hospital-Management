
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Hospital</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style type="">
			
			.signup{
				border: 3px black solid;
				width: 100%;
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
<div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Admin</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Patients</span>
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
        -->
    
        <li>
          <a href="doctors.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Doctors</span>
          </a>
        </li>
       
      
        <li>
          <a href="registerUsers.php">
            <i class='bx bx-user' ></i>
            <span class="links_name">Add User</span>
          </a>
        </li>
          <li>
          <a href="registerDoctors2.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Add Doctor</span>
          </a>
        </li>
        <li>
          <a href="menageMessages.php">
            <i class='bx bx-message' ></i>
            <span class="links_name">Messages</span>
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
          <div class="title">Register Patients</div>
          
          <div class="container mt-5 mb-5 d-flex justify-content-center">

<div class="card px-1 py-4"> 
	<form class="card-body" action="registerUsersLogic.php" method="post" id="registerUsersForm">
		
		<h1 class="h3 mb-3 font-weight-normal">Register Users </h1>
		<h6 class="information mt-4">Please provide following information</h6>	
		<input type="text" id="username" class="form-control" placeholder="username" name="fullname" required autofocus>
		<input type="email" id="email" class="form-control" placeholder="email" name="email" required autofocus>
		<input type="text" id="inputEmail" class="form-control" placeholder="username" name="username" required autofocus>
		<input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
		
		<div class=" d-flex flex-column text-center px-5 mt-3 mb-3">
			 
			 <a href="#" class="terms">Terms & Conditions</a> </div>
			 
		<button class="btn btn-primary btn-block confirm-button" type="submit" name="submit"> Confirm</button>	
	</form>
</div>
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







