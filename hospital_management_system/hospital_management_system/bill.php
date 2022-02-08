<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hospital management system</title>
    <link rel="stylesheet" href="css/semantic.min.css">

    <?php    require_once('db_config.php');  ?>

  </head>
  <body style="background: url(https://thumbs.dreamstime.com/b/medical-bill-paid-seal-stamped-document-payment-services-tariff-medical-bill-paid-seal-stamped-document-payment-146081020.jpg); background-size: 100%; "></body>
  <?php
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_errno) {
	    			printf("Connect failed: %s\n", $conn->connect_error);
	    		exit();
			}
				$query = "SELECT * FROM bill";
		?>

		<div class="ui container">
			
			
			
				
					<h1 align="center" style="font-size: 65px;">bill information</h1>
					
				
				</div>
					
				
				 <div class="ui center aligned basic segment">
				 	<div  style="width: 10%">
					<a href="add_form2.php"><button class="ui fluid button"style="background-color:#4e9af1">Add Contact</button></a>
				</div>
				<div  style="width: 10%">
					<a href="Hospital.php"><button class="ui fluid button"style="background-color:#84f14e">back</button></a> </div>
					<br>

					<form class="ui center aligned basic segment" method="post" action="sch2.php">
				      <div class="ui left icon action input">
				        <!-- <label>Name</label> -->
				        <input type="text" name="search_query" placeholder="Seach Contacts...">
				      </div>
				      <button class="ui blue submit butto" style="background-color:red "type="submit">Search</button>
				    </form>

			
			
		</div>
			<div class="ui twelve wide column">
				<div class="ui text container" style="padding-top: 10px;">
    <table class="ui celled table" style="width: 10%">
    	<table class=" ui called unstackable table">
    <t1>Bill</t1>
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
	    <!-- Rest of the page content -->
	<script src="js/jquery-3.4.1.min.js"></script>
  	<script src="js/semantic.min.js"></script>
  
	</body>



</html>