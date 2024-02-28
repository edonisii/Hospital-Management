<?php
include "config.php";
   
if(isset($_POST['submit'])) {
  
    // Count total files
    $countfiles = count($_FILES['files']['name']);
   
    // Prepared statement
    $query = "INSERT INTO image (name,image) VALUES(?,?)";
  
    $statement = $con->prepare($query);
  				
  
    // Loop all files
    for($i = 0; $i < $countfiles; $i++) {
  
        // File name
        $filename = $_FILES['files']['name'][$i];
      
        // Location
        $target_file = './uploads/'.$filename;
      
        // file extension
        $file_extension = pathinfo(
            $target_file, PATHINFO_EXTENSION);
             
        $file_extension = strtolower($file_extension);
      
        // Valid image extension
        $valid_extension = array("png","jpeg","jpg");
      
        if(in_array($file_extension, $valid_extension)) {
  
            // Upload file
            if(move_uploaded_file(
                $_FILES['files']['tmp_name'][$i],
                $target_file)
            ) {
 
                // Execute query
                $statement->execute(
                    array($filename,$target_file));
            }
        }
    }
     
    
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>HMS</title>

    <script src=”https://code.jquery.com/jquery-3.6.0.min.js” integrity=”sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=” crossorigin=”anonymous”;>
</script>

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






<div class="container mt-5 mb-5 d-flex justify-content-center">

<div class="card px-1 py-4"> 
	<form class="card-body" action="" method="post"  enctype='multipart/form-data'>
		
		<h1 class="h3 mb-3 font-weight-normal">Add Doctor's Profile Picture </h1>
		
		
        <input type='file' name='files[]' multiple />
       
		<div class=" d-flex flex-column text-center px-5 mt-3 mb-3">
			
			 <a href="adminDashboard.php" class="terms" id="back">Back</a> </div>
			 
		<button class="btn btn-primary btn-block confirm-button" type="submit" name="submit"> Confirm</button>	
	</form>
</div>
</div>

</body>
</html>