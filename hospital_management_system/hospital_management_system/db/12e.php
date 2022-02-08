<?php 
	
	$id =  $_POST['id_entry'];
	
	$phone = $_POST['phone_entry'];
	$address = $_POST['address_entry'];
	$number =$_POST['number_entry'];
	$room =$_POST['room_entry'];
	
	// echo $id;
	require_once('../db_config.php');

	$sql = "Update bill SET  Bill_no='$id', Treatment_charge='$phone', Bed_charge='$address', Other_charge='$number', Total_bill='$room' WHERE Bill_no='$id'";

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
		 header("Location: ../bill.php"); 
	}

	

	echo "<a href='../bill.php'>Back</a>"
	// php header("Location: ../index.php'"); 

?>