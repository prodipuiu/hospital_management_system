<?php 
	
	
	
	$Report_id = $_POST['id_entry'];
	$Description=  $_POST['name_entry'];
	$Paitent_id = $_POST['address_entry'];
	
	
	
	require_once('../db_config.php');

	$sql = "Insert into test_report VALUES('$Report_id', '$Description', '$Paitent_id')";

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
		 header("Location: ../test_report.php"); 

	}

	$conn->close();

	echo "<a href='../test_report.php'>Back</a>"

?>

