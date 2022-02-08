<?php 
	
	$id =  $_POST['id_entry'];
	$name =  $_POST['name_entry'];
	$phone = $_POST['phone_entry'];
	$address = $_POST['address_entry'];
	$number =$_POST['number_entry'];
	$room =$_POST['room_entry'];
	$ssalary =$_POST['ssalary_entry'];
	// echo $id;
	require_once('../db_config.php');

	$sql = "Update doctor SET Doctors_name='$name', Gender='$phone', Departmen='$address', Phone_number='$number', Room_incharge='$room', salary='$ssalary' WHERE Doctors_id='$id'";

	$conn = new mysqli($servername, $username, $password, $dbname);

	$result = $conn->query($sql);
	$conn->close();

	if (!$result)
	{
		echo "Error during update!<br>";
		echo mysqli_error($conn);
	}
	else
	{
		echo "Successfully updated contact info of $name. <br>";
		 header("Location: ../doctor.php"); 
	}

	

	echo "<a href='../doctor.php'>Back</a>"
	// php header("Location: ../index.php'"); 

?>