<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hospital management system</title>
    <link rel="stylesheet" href="css/semantic.min.css">

    <?php    require_once('db_config.php');  ?>

  </head>
  <body style="background: url(https://etimg.etb2bimg.com/thumb/msid-72818662,width-1200,resizemode-4/.jpg); background-size: 100%; "></body>
  <?php
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_errno) {
	    			printf("Connect failed: %s\n", $conn->connect_error);
	    		exit();
			}
				$query = "SELECT * FROM hospital_credit_money";
		?>

		<div class="ui grid">
			
			
				
					<h1>hospital_credit_money</h1>
					
				</div>
				
					
				
				<div style="padding: 30px;">
					<a href="add_form2.php"><button class="ui fluid button">Add Contact</button></a>
					<a href="Hospital.php"><button class="ui fluid button">back</button></a>
					<br>

					
				</div>
			<div class="ui twelve wide column">
				<div class="ui text container" style="padding-top: 10px;">
    <table class="ui celled table" style="width: 10%">
    	<table class=" ui called unstackable table">
    <t1>hospital_credit_money</t1>
			<thead>
			<tr>
				<th>doctors_totall</th>
				<th>nurse_toall</th>
				<th>others_toall</th>


        <th>totall_credit</th>
       
        <th>Option</th>
			</tr>
			</thead>
			<tbody>
			<?php
			if ($result = $conn->query($query)) {
				
				while ($row = $result->fetch_assoc()){

					printf("<tr>");
					printf("<td>%d</td><td>%d</td><td>%d</td><td>%d</td><td><a href ='Credit_from.php?id=%d'>Edit </a></td>",  $row["doctors_totall"], $row["nurse_toall"], $row["others_toall"], $row["totall_credit"],$row["doctors_totall"]);
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