<?php 
	
	$Name =  $_POST['name_entry'];
	$Phone = $_POST['phone_entry'];
	$address = $_POST['address_entry'];
	
	require_once('../db_config.php');

	$sql = "Insert into Admin VALUES(NULL, '$Name', '$Phone', '$address')";

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
		 header("Location: ../admin.php"); 

	}

	$conn->close();

	echo "<a href='../admin.php'>Back</a>"

?>

