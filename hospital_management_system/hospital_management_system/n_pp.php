<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hospital management system</title>
    <link rel="stylesheet" href="css/semantic.min.css">

    <?php    require_once('db_config.php');  ?>

  </head>
  <body style="background: url(https://c.ndtvimg.com/2020-04/m10c064_coronavirus-india-afp_625x300_27_April_20.jpg); background-size: 100%; "></body>

<?php
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_errno) {
	    			printf("Connect failed: %s\n", $conn->connect_error);
	    		exit();
			}

			$query = "SELECT * FROM test_report";
		?>
		<div class="ui container">
			
					<h1 align="center" style="font-size: 65px;">Test_Report</h1>
					
				</div>
				<div >
					

					<div  style="width: 10%">
					<a href="Hospital.php"><button class="ui fluid button"style="background-color:#4e9af1">back</button></a></div>
					<br>


					<form class="ui center aligned basic segment" method="post" action="n_p.php">
				      <div class="ui left icon action input">
				        <!-- <label>Name</label> -->
				        <input type="text" name="search_query" placeholder="Seach Contacts...">
				      </div>
				      <div  style="width: 10%">
				      <button class="ui right floated button" style="background-color:#9a4ef1" type="submit">Search</button>
				    </form>
				    
				</div>
				</div>
			<div class="ui twelve wide column">
				<div class="ui text container" style="padding-top: 50px;">
    <table class="ui celled table" style="width: 50%">
    	<table class=" ui called unstackable table">
    
			<thead>
			<tr>
				<th>Report_id</th>
				<th>Description</th>
				<th>Paitent_id</th>
				<th>Optin</th>
			</tr>
			</thead>
			<tbody>
			<?php
			if ($result = $conn->query($query)) {
				
				while ($row = $result->fetch_assoc()){
					printf("<tr>");
					printf("<td>%d</td> <td>%s</td> <td>%d</td> <td><a href ='db/test_del.php?id=%s'>Delete </a><a href ='tst_form.php?id=%d'>Edit</a></td>", $row["Report_id"], $row["Description"], $row["Paitent_id"], $row["Report_id"], $row["Report_id"]);
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
