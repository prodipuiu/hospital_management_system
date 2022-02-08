<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Search Result</title>
		<link rel="stylesheet" href="css/semantic.min.css">
		<?php 
			require_once('db_config.php'); 
		?>
	</head>
	<body>
		<?php

			$search_query = $_POST['search_query'];

			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_errno) {
	    			printf("Connect failed: %s\n", $conn->connect_error);
	    		exit();
			}

			$query = "SELECT * FROM bill WHERE Bill_no LIKE '%$search_query%'";
		?>
		
		<div class="ui grid">
			<div class="ui four wide column" style="background: gray; min-height: 100vh;">
				<div style="padding: 20px;">
					<h1>Search Result</h1>
					<p>Searched for '<?php echo $search_query; ?>'</p>
				</div>
				<div style="padding: 30px;">
					<a href="bill.php"><button class="ui fluid button">Back</button></a>
					<br>
				</div>
			</div>
			<div class="ui twelve wide column">
				<div class="ui text container" style="padding-top: 50px;">
					<table class="ui celled unstackable table">
					<thead>
			<tr>
				<th>Bill_No</th>
				<th>Treatment_charge</th>
				<th>Bed_charge</th>


        <th>Other_charge</th>
        <th>Total_bill</th>
        <th>Option</th>
			</tr>
			</thead>
			<tbody>
			<?php
			if ($result = $conn->query($query)) {
				
				while ($row = $result->fetch_assoc()){

					printf("<tr>");
					printf("<td>%d</td><td>%d</td><td>%d</td><td>%d</td><td>%d</td><td><a href ='db/12.php?id=%s'>Delete</a> <a href ='bill_form.php?id=%d'>Edit </a></td>",  $row["Bill_no"], $row["Treatment_charge"], $row["Bed_charge"], $row["Other_charge"],$row["Total_bill"], $row["Bill_no"], $row["Bill_no"]);
					printf("</tr>");
					
				}
			}
			?>
			</tbody>
					</table>
				</div>

			</div>
		</div>

		
	    <!-- Rest of the page content -->
	<script src="js/jquery-3.4.1.min.js"></script>
  	<script src="js/semantic.min.js"></script>
	</body>
</html>