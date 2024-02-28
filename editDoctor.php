<!--

<?php

	include_once('config.php');

	$id = $_GET['id'];


	$sql = "SELECT * FROM users WHERE id=:id";

	$prep = $con->prepare($sql);
	$prep->bindParam(':id', $id);
	$prep->execute();

	$user = $prep->fetch();

	
	//var_dump($_GET);
	

?>






<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<style>

		form>input {
		    margin-bottom: 10px;
		    font-size: 20px;
		    padding: 5px;
		}

		button {
		    background: none;
		    border: none;
		    border: 1px solid black;
		    padding: 10px 40px;
		    font-size: 20px;
		    cursor: pointer;
		}
	</style>
</head>
<body>
	
	<form action="update.php" method="POST">
		
		<input type="hidden" value="<?= $user['id']; ?>" name="id"><br>
		<input type="text" value="<?= $user['username']; ?>" name="username"><br>
		<input type="text" value="<?= $user['fullname']; ?>" name="fullname"><br>
		<input type="email" value="<?= $user['email']; ?>" name="email"><br>
		
		<button type="submit" name="update">Update</button>

	</form>

	<a href="dashboard.php">Dashboard</a>

</body>
</html>
 -->
 <?php



include_once('config.php');

$id = $_GET['id'];


$sql = "SELECT * FROM doktorrat WHERE id=:id";

$prep = $con->prepare($sql);
$prep->bindParam(':id', $id);
$prep->execute();

$user = $prep->fetch();

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
      <span class="logo_name">Admin</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="adminDashboard.php" class="active">
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


          
		<form action="updateDoctor.php" method="POST">

			<div id="editForm">
				<h3 id="useriEdit">Edit Doctor</h3>
				<input type="hidden" value="<?= $user['id']; ?>" name="id" class="inputatEdit"><br>
				<label for="">Username:</label>
				<input type="text" value="<?= $user['username']; ?>" name="username" class="inputatEdit"><br>
				<label for="">Fullname:</label>
				<input type="text" value="<?= $user['fullname']; ?>" name="fullname" class="inputatEdit"><br>
				<label for="">Password:</label>
				<input type="email" value="<?= $user['email']; ?>" name="email" class="inputatEdit"><br>
				<button type="submit" name="update">Update</button>
		    </div>
		
		
		

	</form>
          <div class="sales-details">  
    
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

</body>
</html>

