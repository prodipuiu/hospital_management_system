<?php 
	
	$id = $_GET['id'];
	
	require_once('../db_config.php');

	$sql = "DELETE FROM bill where Bill_no='$id'";

	$conn = new mysqli($servername, $username, $password, $dbname);

	$result = $conn->query($sql);

	
	if (!$result)
	{
		echo "Error during deletion!<br>";
		echo "<a href='../bill.php'>Back</a>";
		echo mysqli_error($conn);
	}
	else
	{
		echo "Successfully deleted!<br>";
		header("Location: ../bill.php"); 
	}

	$conn->close();

	
	

?>