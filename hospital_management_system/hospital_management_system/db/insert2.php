<?php 
	$Doctors_name = $_POST['phone_entry'];
	$Doctors_id=  $_POST['id_entry'];
	$Gender= $_POST['gen_entry'];
	$Departmen = $_POST['address_entry'];
	$Phone_numbere =$_POST['number_entry'];
	$Room_incharge =$_POST['room_entry'];
	$salary=$_POST['sal_entry'];
	
	require_once('../db_config.php');

	$sql = "Insert into doctor VALUES('$Doctors_name', '$Doctors_id', '$Gender', '$Departmen','$Phone_number' ,'$Room_incharge' ,'$salary' )";

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
		 header("Location: ../doctor.php"); 

	}

	$conn->close();

	echo "<a href='../doctor.php'>Back</a>"

?>

