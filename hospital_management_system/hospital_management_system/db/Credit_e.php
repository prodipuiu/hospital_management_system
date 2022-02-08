<?php 
	
	$id =  $_POST['id_entry'];
	
	$phone = $_POST['phone_entry'];
	$address = $_POST['address_entry'];
	$number =$_POST['number_entry'];
	
	
	// echo $id;
	require_once('../db_config.php');

	$sql = "Update hospital_credit_money SET  doctors_totall='$id', nurse_toall='$phone', others_toall='$address', totall_credit='$number' WHERE doctors_totall='$id'";

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
		 header("Location: ../Credit_money.php"); 
	}

	

	echo "<a href='../Credit_money.php'>Back</a>"
	// php header("Location: ../index.php'"); 

?>