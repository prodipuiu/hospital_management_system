<?php 
	
	$id = $_GET['id'];
	
	require_once('../db_config.php');

	$sql = "DELETE FROM room where Room_number='$id'";

	$conn = new mysqli($servername, $username, $password, $dbname);

	$result = $conn->query($sql);

	
	if (!$result)
	{
		echo "Error during deletion!<br>";
		echo "<a href='../room.php'>Back</a>";
		echo mysqli_error($conn);
	}
	else
	{
		echo "Successfully deleted!<br>";
		header("Location: ../room.php"); 
	}

	$conn->close();
	

	

?>
