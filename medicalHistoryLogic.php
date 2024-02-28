<?php

	include_once('config.php');	


	if(isset($_POST['submit']))
	{

		$name = $_POST['name'];
		$mobileNumber = $_POST['mobileNumber'];
		$MedicalHistory = $_POST['MedicalHistory'];
		$VisitDate = $_POST['VisitDate'];
        $age = $_POST['age'];



		$sql = "INSERT INTO medicalhistory(name, mobileNumber, MedicalHistory, VisitDate, age) VALUES ( :name, :mobileNumber, :MedicalHistory, :VisitDate, :age)";

		$prep = $con->prepare($sql);
					

					
		$prep->bindParam(':name', $name);
		$prep->bindParam(':mobileNumber', $mobileNumber);
		$prep->bindParam(':MedicalHistory', $MedicalHistory);
		$prep->bindParam(':VisitDate', $VisitDate);
        $prep->bindParam(':age', $age);
		$prep->execute();

				

  		

		
		}
				
	header('Location:MedicalHistory.php');

?>