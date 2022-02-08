<?php 
	
	$id =  $_POST['id_entry'];
	$name =  $_POST['name_entry'];
	$phone = $_POST['phone_entry'];
	$address = $_POST['address_entry'];
		
	// echo $id;
	require_once('../db_config.php');

	$sql = "Update admin SET Name='$name', Phone='$phone', address='$address' WHERE Id='$id'";

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
		 header("Location: ../admin.php"); 
	}

	

	echo "<a href='../admin.php'>Back</a>"
	// php header("Location: ../index.php'"); 

?>

