<?php 
	
	
	
	$Nurse_name = $_POST['phone_entry'];
	$Nurse_id=  $_POST['id_entry'];
	$Room_incharge = $_POST['address_entry'];
	
	
	
	require_once('../db_config.php');

	$sql = "Insert into nurse VALUES('$Nurse_name', '$Nurse_id', '$Room_incharge')";

	$conn = new mysqli($servername, $username, $password, $dbname);

	$result = $conn->query($sql);
     
	$conn->close();

	if (!$result)
	{
		echo "Error during insertion!<br>";
		echo mysqli_error($conn);
	}
	else
	{
		echo "Successfully added contact info. <br>";
		 header("Location: ../nurse.php"); 

	}

	$conn->close();

	echo "<a href='../nurse.php'>Back</a>"

?>

