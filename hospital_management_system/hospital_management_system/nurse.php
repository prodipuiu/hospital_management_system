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
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_errno) {
	    			printf("Connect failed: %s\n", $conn->connect_error);
	    		exit();
			}

			$query = "SELECT * FROM nurse";
		?>
		<div class="ui container">
			
			
				
					<h1 align="center" style="font-size: 65px">nurse information</h1>
					
				</div>
				
					
				
				<div  style="width: 10%">
					<a href="ad4.php"><button class="ui fluid button" style="background-color:#f1bb4e">Add Contact</button></a></div>

					<div  style="width: 10%">
					<a href="Hospital.php"><button class="ui fluid button" style="background-color:#84f14e">back</button></a></div>
					<br>

					<form class="ui center aligned basic segment" method="post" action="sch4.php">
				      <div class="ui left icon action input">
				        <!-- <label>Name</label> -->
				        <input type="text" name="search_query" placeholder="Seach Contacts...">
				      </div>
				      <button class="ui right floated button" style="background-color:#4e9af1" type="submit">Search</button>
				    </form>
				</div>
			<div class="ui twelve wide column">
				<div class="ui text container" style="padding-top: 10px;">
    <table class="ui celled table" style="width: 10%">
    	<table class=" ui called unstackable table">
    		<div class="ui five column padded grid">
  
			<thead>
				<div class="red column">Red</div>
   
			<tr>
				<th>Nurse_name</th>
				<th class="brown column">Nurse_id</th>
				<th>Room_incharge</th>
			</tr>
			</thead>
			<tbody>
			<?php
			if ($result = $conn->query($query)) {
				while ($row = $result->fetch_assoc()){
					printf("<tr>");
					printf("<td>%s</td> <td>%d</td> <td>%s</td> <td><a href ='db/nurse_del.php?id=%s'>Delete </a> <a href ='nurse_for.php?id=%s'>Edit</a></td>", $row["Nurse_name"], $row["Nurse_id"], $row["Room_incharge"],$row["Nurse_id"],$row["Nurse_id"]);
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
