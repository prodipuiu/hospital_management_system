<?php 
	
	$bid =  $_POST['bid_entry'];
	$name =  $_POST['name_entry'];
	$gender = $_POST['gender_entry'];
	$age =$_POST['age_entry'];
	$gorup = $_POST['gorup_entry'];
	$address = $_POST['address_entry'];
	$phone = $_POST['phone_entry'];
	$room =$_POST['room_entry'];
	
	
	// echo $id;
	require_once('../db_config.php');

	$sql = "Update paitient SET Paitient_id='$bid', Paitient_name='$name' , Paitient_gender='$gender' , Paitient_age='$age' , Blood_group='$gorup',Paitient_address='$address' ,Paitient_phone='$phone' , Room='$room' WHERE Paitient_id='$bid'";

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
		 header("Location: ../paitient.php"); 
	}

	

	echo "<a href='../paitient.php'>Back</a>"
	// php header("Location: ../index.php'"); 

?>