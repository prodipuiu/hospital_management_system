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
  			$search_query = $_POST['search_query'];
  			
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_errno) {
	    			printf("Connect failed: %s\n", $conn->connect_error);
	    		exit();
			}

			$query = "SELECT t.Report_id,t.Description FROM test_report t join bill b on (t.Paitent_id=b.Bill_no) where b.Bill_no in (select Paitient_id from paitient  where Paitient_id LIKE '%$search_query%')";
		?><div class="ui grid">
			
			
				
					<h1>bill</h1>
					
			
				<div style="padding: 30px;">
					<a href="test_report.php"><button class="ui fluid button">Back</button></a>
					<br>
				</div>
			</div>
				    </form>
				</div>
			<div class="ui twelve wide column">
				<div class="ui text container" style="padding-top: 10px;">
    <table class="ui celled table" style="width: 10%">
    	<table class=" ui called unstackable table">
    <t1>Patient</t1>
			<thead>
			<tr>
				
				
				
				<th>Report_id</th>
        <th>Description</th>
       
			</tr>
			</thead>
			<tbody>
			<?php
			if ($result = $conn->query($query)) {
				while ($row = $result->fetch_assoc()){
					printf("<tr>");
					printf(" <td>%d</td> <td>%s</td> ",$row["Report_id"],$row["Description"]);
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


