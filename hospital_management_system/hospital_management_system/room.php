<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hospital management system</title>
    <link rel="stylesheet" href="css/semantic.min.css">

    <?php    require_once('db_config.php');  ?>

  </head>
  <h1 align="center" style="font-size: 65px;">Room</h1>
  <body style="background: url(https://etimg.etb2bimg.com/thumb/msid-72818662,width-1200,resizemode-4/.jpg); background-size: 100%; "></body>
  <body>	
<?php
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_errno) {
	    			printf("Connect failed: %s\n", $conn->connect_error);
	    		exit();
			}

			$query = "SELECT * FROM room";
		?>
		
   <div class="ui container">
			
			
				
					
					
				</div>
				
					
				
				<div  style="width: 10%">
					<a href="ad6.php"><button class="ui fluid button" style="background-color:#4ef18f">Add Contact</button></a></div>

					<div  style="width: 10%">
					<a href="Hospital.php"><button class="ui fluid button" style="background-color:#4e9af1">back</button></a></div>
					
					<div class="ui container">
					<form class="ui form" method="post" action="sch6.php">
				      <div class="field">
				        <!-- <label>Name</label> -->
				        <input type="text" name="search_query" placeholder="Seach Contacts...">
				      </div>
				      <button class="ui right floated button" style="background-color:#9a4ef1"type="submit">Search</button>

				    </form>
</div>
				</div>

			<div class="ui twelve wide column">
				<div class="ui text container" style="padding-top: 10px;">
    <table class="ui celled table" style="width: 10%">
    	<table class=" ui called unstackable table">
    
			<thead>
			<tr>
				<th>Room_type</th>
				<th>Room_number</th>
				<th>Option</th>
		
			</tr>
			</thead>
			<tbody>
			<?php
			if ($result = $conn->query($query)) {
				while ($row = $result->fetch_assoc()){
					printf("<tr>");
					printf("<td>%s</td> <td>%d</td> <td><a href ='db/room_del.php?id=%s'>Delete </a> <a href ='room_ad.php?room=%s'>Edit </a> </td>", $row["Room_type"], $row["Room_number"] , $row["Room_number"], $row["Room_number"]);
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