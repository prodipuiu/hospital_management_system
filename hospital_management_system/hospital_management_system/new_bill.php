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
				$query = "SELECT p.Paitient_name,b.Total_bill FROM bill b join paitient p on (b.Bill_no=p.Paitient_id)";
		?>

		<div class="ui grid">
			
			
				
					<h1 align="center" style="font-size: 65px;" "flood-color: 20px ">bill with paiteint</h1>
					
				</div>
				
					
				
				<div style="padding: 30px;">
					<a href="add_form2.php"><button class="ui fluid button">Add Contact</button></a>
					<a href="Hospital.php"><button class="ui fluid button">back</button></a>
					<br>

					<form class="ui form" method="post" action="new_srch.php">
				      <div class="field">
				        <!-- <label>Name</label> -->
				        <input type="text" name="search_query" placeholder="Seach Contacts...">
				      </div>
				      <button class="ui right floated button" type="submit">Search</button>
				    </form>
				</div>
			<div class="ui twelve wide column">
				<div class="ui text container" style="padding-top: 10px;">
    <table class="ui celled table" style="width: 10%">
    	<table class=" ui called unstackable table">
    <t1>Bill</t1>
			<thead>
			<tr>
				
        
        <th>Paitient_name</th>
       <th>Total_bill</th>

			</tr>
			</thead>
			<tbody>
			<?php
			if ($result = $conn->query($query)) {
				
				while ($row = $result->fetch_assoc()){

					printf("<tr>");
					printf("<td>%s</td><td>%d</td>",  $row["Paitient_name"], $row["Total_bill"]);
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