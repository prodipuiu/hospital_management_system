<?php 
	
	$id =  $_POST['id_entry'];
	$name =  $_POST['name_entry'];
	
	$room =$_POST['room_entry'];
	
	// echo $id;
	require_once('../db_config.php');

	$sql = "Update nurse SET Nurse_name='$name', Room_incharge='$room' WHERE Nurse_id='$id'";

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
		 header("Location: ../nurse.php"); 
	}

	

	echo "<a href='../nurse.php'>Back</a>"
	// php header("Location: ../index.php'"); 

?>