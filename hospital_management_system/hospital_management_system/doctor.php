<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hospital management system</title>
    <link rel="stylesheet" href="css/semantic.min.css">

    <?php    require_once('db_config.php');  ?>

  </head>
  <body style="background: url(https://i.pinimg.com/originals/40/74/94/4074941dde5491b0032964850d6368a1.jpg); background-size: 100%; ">
<?php
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_errno) {
	    			printf("Connect failed: %s\n", $conn->connect_error);
	    		exit();
			}
			

			$query = "SELECT * FROM doctor";
		?>
		<div class="ui container">
			
			
				
					<h1 align="center" style="font-size: 65px;">Doctor information</h1>
					<h1>        </h1>
				</div>
				
					
				
				<div  style="width: 10%">
					<a href="ad3.php"><button class="button" style="background-color:#f14e4e">Add Contact</button></a></div>

					<div  style="width: 10%">
					<a href="Hospital.php"><button class="button" style="background-color:#f1bb4e">back</button></a></div>
					<br>

					<form class="ui center aligned basic segment" method="post" action="sch3.php">
				      <div class="ui left icon action input">
				        <!-- <label>Name</label> -->
				        <input type="text" name="search_query" placeholder="Seach Contacts...">
				      </div>
				      <button class="ui right floated button" style="background-color:#84f14e" type="submit">Search</button>
				    </form>
				</div>
			<div class="ui twelve wide column">
				<div class="ui text container" style="padding-top: 10px;">
    <table class="ui celled table" style="width: 10%">
    	<table class=" ui called unstackable table">
  
		
   
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
          <th>option</th>
			</tr>
			</thead>
			<tbody>
			<?php
			if ($result = $conn->query($query)) {
				
				while ($row = $result->fetch_assoc()){
					printf("<tr>");
					printf("<td>%s</td> <td>%d</td> <td>%s</td> <td>%s</td> <td>%s</td> <td>%d</td> <td>%d</td><td><a href ='db/1234.php?id=%s'>Delete </a><a href ='ad.php?id=%s'>Edit</a> </td>", $row["Doctors_name"], $row["Doctors_id"], $row["Gender"], $row["Departmen"], $row["Phone_number"], $row["Room_incharge"],  $row["salary"],  $row["Doctors_id"],  $row["Doctors_id"]);
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