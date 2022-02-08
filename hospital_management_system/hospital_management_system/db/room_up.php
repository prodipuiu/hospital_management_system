<?php 
	
	$id =  $_POST['id_entry'];
	$name =  $_POST['name_entry'];
	
		
	// echo $id;
	require_once('../db_config.php');

	$sql = "Update room SET Room_type='$name' WHERE Room_number='$id'";

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
		 header("Location: ../room.php"); 
	}

	

	echo "<a href='../Hospital.php'>Back</a>"
	// php header("Location: ../index.php'"); 

?>

<?php 
	
	$id =  $_POST['id_entry'];
	$name =  $_POST['name_entry'];
	
		
	// echo $id;
	require_once('../db_config.php');

	$sql = "Update room SET Room_type='$name' WHERE Room_number='$id'";

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
		 header("Location: ../Hospital.php"); 
	}

	

	echo "<a href='../room.php'>Back</a>"
	// php header("Location: ../index.php'"); 

?>

