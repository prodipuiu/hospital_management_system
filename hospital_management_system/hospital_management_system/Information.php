<!DOCTYPE html>
<html lang="en">
  <head>
   
    <title>Hospital management system</title>
    

    <?php    require_once('db_config.php');  ?>

  </head>
  <body>
  	 <body style="background: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcToBc1mjNVCVlOD54spFuiLrTqc5XiKk3obZQ&usqp=CAU); background-size: 100%; ">
  <?php
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_errno) {
	    			printf("Connect failed: %s\n", $conn->connect_error);
	    		exit();
			}

			$query = "SELECT * FROM paitient";
		?>
		<h1 align="center" style="font-size: 65px;"> Hospital Information</h1>

		<div>
			<div class="btn-group">
				<div  style="width: 30%">
				<h1>paitient</h1>
				<div  style="width: 90%">
						<a href="total_paitient.php"><button class="button" style="background-color:#f1bb4e">total_paitient</button></a>
						<h1>Total_room</h1>
					<div  style="width: 30%">
						<a href="Total_room.php"><button class="button" style="background-color:#84f14e">Total_room</button></a>
						<h1>total_nurse</h1>
					
						<a href="total_nurse.php"><button class="button" style="background-color:#4ef18f">total_nurse</button></a>
						<h1>total_doctor</h1>
					
						<a href="total_doctor.php"><button class="button" style="background-color:#4e9af1">Nurse</button></a>
						<h1>Totall profit</h1>
						<a href="total_income.php"><button class="button" style="background-color:#4e9af1">totall profit</button></a>
			<h1>Credit_money hospital</h1>
				
						<a href="Credit_money.php"><button class="button4" style="background-color:#9a4ef1">Room inormation</button></a>

							</div>

		</div>







  </body>
</div>

</body>
</html>