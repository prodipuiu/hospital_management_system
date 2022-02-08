<?php 
	$Paitient_id=  $_POST['id_entry'];
	$Paitient_name = $_POST['phone_entry'];
	$Paitient_gender=  $_POST['iod_entry'];
	$Paitient_age = $_POST['address_entry'];
	$Blood_group = $_POST['number_entry'];
	$Paitient_Address = $_POST['room_entry'];
	$Paitient_phone= $_POST['sal_entry'];
	$Room= $_POST['mal_entry'];
	
	require_once('../db_config.php');

	$sql = "Insert into paitient VALUES ('$Paitient_id', '$Paitient_name', '$Paitient_gender', '$Paitient_age', '$Blood_group', '$Paitient_Address' ,'$Paitient_phone' ,'$Room')";

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
		 header("Location: ../paitient.php"); 

	}

	$conn->close();

	echo "<a href='../paitient.php'>Back</a>"

?>

