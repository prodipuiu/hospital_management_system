$Room<?php 
	
	
	
	$Room_type = $_POST['phone_entry'];
	$Room_number=  $_POST['id_entry'];
	
	
	
	require_once('../db_config.php');

	$sql = "Insert into room VALUES('$Room_type', '$Room_number')";

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
		 header("Location: ../room.php"); 

	}

	$conn->close();

	echo "<a href='../room.php'>Back</a>"

?>

