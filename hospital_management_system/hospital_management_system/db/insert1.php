<?php 
	
	$Bill_no=  $_POST['id_entry'];
	
	$Treatment_charge = $_POST['phone_entry'];
	$Bed_charge = $_POST['address_entry'];
	$Other_charge =$_POST['number_entry'];
	$Total_bill =$_POST['room_entry'];
	
	
	require_once('../db_config.php');

	$sql = "Insert into bill VALUES('$Bill_no', '$Treatment_charge', '$Bed_charge', '$Other_charge', '$Total_bill')";

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
		 header("Location: ../bill.php"); 

	}

	$conn->close();

	echo "<a href='../bill.php'>Back</a>"

?>

