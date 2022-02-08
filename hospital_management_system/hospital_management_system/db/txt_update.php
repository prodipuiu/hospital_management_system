<?php 
	
	$id =  $_POST['id_entry'];
	$name =  $_POST['name_entry'];
	$pid = $_POST['pid_entry'];
	
		
	// echo $id;
	require_once('../db_config.php');

	$sql = "Update test_report SET Report_id='$id', Description='$name',Paitent_id='$pid'  WHERE Report_id='$id'";

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
		 header("Location: ../test_report.php"); 
	}

	

	echo "<a href='../test_report.php'>Back</a>"
	// php header("Location: ../index.php'"); 

?>

