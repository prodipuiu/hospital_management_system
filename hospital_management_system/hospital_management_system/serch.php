<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Serch</title>
    <link rel="stylesheet" href="css/semantic.min.css">

    <?php    require_once('db_config.php');  ?>

  </head>
  <body style="background: url(https://etimg.etb2bimg.com/thumb/msid-72818662,width-1200,resizemode-4/.jpg); background-size: 100%; "></body>

  <body>
  <?php
  			$search_query = $_POST['search_query'];
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_errno) {
	    			printf("Connect failed: %s\n", $conn->connect_error);
	    		exit();
			}

			$query = "SELECT * FROM admin WHERE Name='$search_query'";
		?>
		<div class="ui grid">
			<div class="ui four wide column" style="background: gray; min-height: 100vh;">
				<div style="padding: 20px;">
					<h1>Search Result</h1>
					<p>Searched for '<?php echo $search_query; ?>'</p>
				</div>
				<div style="padding: 30px;">
					<a href="Hospital.php"><button class="ui fluid button">Back</button></a>
					<br>
				</div>
			
			</div>
			<div class="ui twelve wide column">
				<div class="ui text container" style="padding-top: 50px;">
    <table class="ui celled table" style="width: 50%">
    	<table class=" ui called unstackable table">
    
    <t1>Admin Table</t1>
			<thead>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Phone</th>
				<th>Address</th>
				<th>Option</th>
			</tr>
			</thead>
			<tbody>

			<?php
			if ($result = $conn->query($query)) {
				$scr=1;
				while ($row = $result->fetch_assoc()){
					
					printf("<tr>");
					printf("<td>%d</td><td>%s</td><td>%s</td><td>%s</td><td><a href ='db/delete.php?id=%s'>Delete </a> <a href ='add_update.php?id=%s'>Edit</a></td>", $scr, $row["Name"], $row["Phone"], $row["address"],$row["Id"],$row["Id"]);
					printf("</tr>");
					$scr++;
				}
			}
			?>
			</tbody>
		</table>
		</table>
	    <!-- Rest of the page content -->
	<script src="js/jquery-3.4.1.min.js"></script>
  	<script src="js/semantic.min.js"></script>
  </body>

  <body>
  <?php
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_errno) {
	    			printf("Connect failed: %s\n", $conn->connect_error);
	    		exit();
			}
				$query = "SELECT * FROM bill";
		?>

		<div class="ui grid">
			
				
					
				
				</div>
				<div style="padding: 30px;">
					<a href="add_form.html"><button class="ui fluid button">Add Contact</button></a>
				</div>
			</div>
			<div class="ui twelve wide column">
				<div class="ui text container" style="padding-top: 10px;">
    <table class="ui celled table" style="width: 10%">
    <t1>Bill</t1>
			<thead>
			<tr>
				<th>Bill_No</th>
				<th>Treatment_charge</th>
				<th>Bed_charge</th>

        <th>Other_charge</th>
        <th>Total_bill</th>
			</tr>
			</thead>
			<tbody>
			<?php
			if ($result = $conn->query($query)) {
				while ($row = $result->fetch_assoc()){
					printf("<tr>");
					printf("<td>%d</td><td>%d</td><td>%d</td><td>%d</td><td>%d</td> ", $row["Bill_no"], $row["Treatment_charge"], $row["Bed_charge"], $row["Other_charge"] , $row["Total_bill"]);
					printf("</tr>");
				}
			}
			?>
			</tbody>
		</table>
	    <!-- Rest of the page content -->
	<script src="js/jquery-3.4.1.min.js"></script>
  	<script src="js/semantic.min.js"></script>
  </body>

<body>
<?php
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_errno) {
	    			printf("Connect failed: %s\n", $conn->connect_error);
	    		exit();
			}

			$query = "SELECT * FROM doctor";
		?>
		
    <table class="ui celled table" style="width: 50%">
    <t1>Doctors</t1>
			<thead>
			<tr>
				<th>Doctors_name</th>
				<th>Doctors_iD</th>
				<th>Gender</th>
        <th>Department</th>
        <th>Phone_number</th>
         <th>Room_incharge</th>
          <th>salary</th>
			</tr>
			</thead>
			<tbody>
			<?php
			if ($result = $conn->query($query)) {
				while ($row = $result->fetch_assoc()){
					printf("<tr>");
					printf("<td>%s</td> <td>%d</td> <td>%s</td> <td>%s</td> <td>%s</td> <td>%d</td> <td>%d</td>", $row["Doctors_name"], $row["Doctors_id"], $row["Gender"], $row["Departmen"], $row["Phone_number"], $row["Room_incharge"],  $row["salary"]);
					printf("</tr>");
				}
			}
			?>
			</tbody>
		</table>
	    <!-- Rest of the page content -->
	<script src="js/jquery-3.4.1.min.js"></script>
  	<script src="js/semantic.min.js"></script>
</body>

<body>
<?php
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_errno) {
	    			printf("Connect failed: %s\n", $conn->connect_error);
	    		exit();
			}

			$query = "SELECT * FROM nurse";
		?>
		<div class="ui grid">
		
    <table class="ui celled table" style="width: 50%">
    <t1>Nurse</t1>
			<thead>
			<tr>
				<th>Nurse_name</th>
				<th>Nurse_id</th>
				<th>Room_incharge</th>
			</tr>
			</thead>
			<tbody>
			<?php
			if ($result = $conn->query($query)) {
				while ($row = $result->fetch_assoc()){
					printf("<tr>");
					printf("<td>%s</td> <td>%d</td> <td>%s</td>", $row["Nurse_name"], $row["Nurse_id"], $row["Room_incharge"]);
					printf("</tr>");
				}
			}
			?>
			</tbody>
		</table>
	    <!-- Rest of the page content -->
	<script src="js/jquery-3.4.1.min.js"></script>
  	<script src="js/semantic.min.js"></script>
</body>


<body>
<?php
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_errno) {
	    			printf("Connect failed: %s\n", $conn->connect_error);
	    		exit();
			}

			$query = "SELECT * FROM paitient";
		?>
		
		
    <table class="ui celled table" style="width: 50%">
    <t1>Patient</t1>
			<thead>
			<tr>
				<th>Paitient_id</th>
				<th>Paitient_name</th>
				<th>Patient_gender</th>
        <th>Paitient_age</th>
        <th>Blood_group</th>
        <th>Paitient_Address</th>
        <th>Paitient_phone</th>
         <th>Room</th>
			</tr>
			</thead>
			<tbody>
			<?php
			if ($result = $conn->query($query)) {
				while ($row = $result->fetch_assoc()){
					printf("<tr>");
					printf("<td>%d</td> <td>%s</td> <td>%s</td> <td>%d</td> <td>%s</td> <td>%s</td> <td>%s</td>", $row["Paitient_id"], $row["Paitient_name"], $row["Paitient_gender"], $row["Paitient_age"], $row["Blood_group"], $row["Paitient_Address"], $row["Paitient_phone"], $row["Room"]);
					printf("</tr>");
				}
			}
			?>
			</tbody>
		</table>
	    <!-- Rest of the page content -->
	<script src="js/jquery-3.4.1.min.js"></script>
  	<script src="js/semantic.min.js"></script>

</body>



<body>	
<?php
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_errno) {
	    			printf("Connect failed: %s\n", $conn->connect_error);
	    		exit();
			}

			$query = "SELECT * FROM room";
		?>
		
    <table class="ui celled table" style="width: 50%">
    <t1>Room</t1>
			<thead>
			<tr>
				<th>Room_type</th>
				<th>Room_number</th>
		
			</tr>
			</thead>
			<tbody>
			<?php
			if ($result = $conn->query($query)) {
				while ($row = $result->fetch_assoc()){
					printf("<tr>");
					printf("<td>%s</td> <td>%s</td>", $row["Room_type"], $row["Room_number"]);
					printf("</tr>");
				}
			}
			?>
			</tbody>
		</table>
	    <!-- Rest of the page content -->
	<script src="js/jquery-3.4.1.min.js"></script>
  	<script src="js/semantic.min.js"></script>
</body>



<body>
<?php
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_errno) {
	    			printf("Connect failed: %s\n", $conn->connect_error);
	    		exit();
			}

			$query = "SELECT * FROM test_report";
		?>
		
    <table class="ui celled table" style="width: 50%">
    <t1>Test_Report</t1>
			<thead>
			<tr>
				<th>Report_id</th>
				<th>Description</th>
				<th>Paitent_id</th>
			</tr>
			</thead>
			<tbody>
			<?php
			if ($result = $conn->query($query)) {
				while ($row = $result->fetch_assoc()){
					printf("<tr>");
					printf("<td>%d</td> <td>%s</td> <td>%d</td>", $row["Report_id"], $row["Description"], $row["Paitent_id"]);
					printf("</tr>");
				}
			}
			?>
			</tbody>
		</table>
	    <!-- Rest of the page content -->
	<script src="js/jquery-3.4.1.min.js"></script>
  	<script src="js/semantic.min.js"></script>
</body>


</html>
