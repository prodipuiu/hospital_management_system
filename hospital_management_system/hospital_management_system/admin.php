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

  <body>
  	
  <?php
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_errno) {
	    			printf("Connect failed: %s\n", $conn->connect_error);
	    		exit();
			}

			$query = "SELECT * FROM admin";
		?>
		<div class="ui container">
			

			
					<h1 align="center" style="font-size: 65px">Admin</h1>
					
				</div>
				<div  style="width: 10%">
					<a href="add_form"><button class="ui fluid button"style="background-color:#4e9af1">Add Contact</button></a></div>
					<div>
						<div  style="width: 10%">
					<a href="Hospital.php"><button class="ui fluid button"style="background-color:#84f14e">back</button></a></div>
					<br>

					<form class="ui center aligned basic segment" method="post" action="serch.php">
				      <div class="ui left icon action input">
				        <!-- <label>Name</label> -->
				        <input type="text" name="search_query" placeholder="Seach Contacts...">
				      </div>
				      <button class="ui right floated button" style="background-color:#668fff"bdtype="submit">Search</button>
				    </form>
				</div>style
				</div>
			<div class="ui twelve wide column">
				<div class="ui text container" style="padding-top: 50px;">
    <table class="ui celled table" style="width: 50%">
    	<table class=" ui called unstackable table">
    
    <t1 align="center" style="font-size: 65px;">Admin Table</t1>
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
					printf("<td>%d</td><td>%s</td><td>%s</td><td>%s</td><td><a href ='db/delete.php?id=%s'>Delete </a> <a href ='add_form.php?id=%s'>Edit</a></td>",$scr, $row['Name'], $row["Phone"], $row["address"],$row["Id"],$row["Id"]);
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
