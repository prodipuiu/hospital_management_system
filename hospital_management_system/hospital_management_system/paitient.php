<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hospital management system</title>
    <link rel="stylesheet" href="css/semantic.min.css">

    <?php    require_once('db_config.php');  ?>

  </head>
  <body style="background: url(https://images.theconversation.com/files/283457/original/file-20190710-44472-1mqt2eb.jpg?ixlib=rb-1.1.0&q=45&auto=format&w=496&fit=clip); background-size: 100%; ">
  <?php
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_errno) {
	    			printf("Connect failed: %s\n", $conn->connect_error);
	    		exit();
			}

			$query = "SELECT * FROM paitient";
		?>
				<div class="ui container">
			
			<h1 align="center" style="font-size: 65px;"> paitient information</h1>
					
				
				</div>

										
				
				<div  style="width: 10%">																			<a href="ad5.php"><button class="ui fluid button" style="background-color:#f1bb4e"> Add Contact</button></a></div>

					<div  style="width: 10%">
					<a href="Hospital.php"><button class="ui fluid button" style="background-color:#84f14e">back</button></a></div>
				
						<div>
					
				    	</div>
				
			

					<div  style="width: 10%">
					<a href="room_relation(d=p).php"><button class="ui fluid button" style="background-color:668fff">paitient and docotrs</button></a>
				</div>

				<div>
					
					<div  style="width: 10%">
					<a href="new_bill.php"><button class="ui fluid button" style="background-color:#f14ebd">Click for Paitient's total bil</button></a></div>
				<form class="ui center aligned basic segment" method="post" action="sch5.php">
				      <div class="ui left icon action input">
				        <!-- <label>Name</label> -->
				        <input type="text" name="search_query" placeholder="Seach Contacts...">
				      </div>
				      <button class="ui right floated button" style="background-color:#9a4ef1" type="submit">Search</button>
				    </form>
				</div>

			</dev>

			<div class="ui twelve wide column">
				<div class="ui text container" style="padding-top: 10px;">
    <table class="ui celled table" style="width: 10%">
    	<table class=" ui called unstackable table">
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

         <th>option</th>
         			</tr>
			</thead>
			<tbody>
			<?php
			if ($result = $conn->query($query)) {
				while ($row = $result->fetch_assoc()){
					printf("<tr>");
					printf("<td>%d</td> <td>%s</td> <td>%s</td> <td>%d</td> <td>%s</td> <td>%s</td> <td>%s</td> <td>%d</td><td><a href ='db/paitient_del.php?id=%s'>Delete </a> <a href ='paitient_form.php?bid=%s'>Edit </a></td>", $row["Paitient_id"], $row["Paitient_name"], $row["Paitient_gender"], $row["Paitient_age"], $row["Blood_group"], $row["Paitient_Address"], $row["Paitient_phone"], $row["Room"] , $row["Paitient_id"] , $row["Paitient_id"] );
					printf("</tr>");
				}
			}
			?>
			</tbody>
		</table>

	    <!-- Rest of the page content -->
	<script src="js/jquery-3.4.1.min.js"></script>
  	<script src="js/semantic.min.js"></script>
</table>
</div>
</div>
</body>


</html>