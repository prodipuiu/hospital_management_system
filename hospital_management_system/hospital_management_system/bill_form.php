<!doctype html>

<html lang="en">

<?php
  require_once('db_config.php');
 $id = $_GET['id'];
 $conn = new mysqli($servername, $username, $password, $dbname);
      if ($conn->connect_errno) {
            printf("Connect failed: %s\n", $conn->connect_error);
          exit();
      }
      $query ="SELECT * FROM bill WHERE Bill_no=$id";
      $result = $conn->query($query);
      $row = $result->fetch_assoc();
?>
<head>
  <meta charset="utf-8">
  <title>new</title>
  <link rel="stylesheet" href="css/semantic.min.css">
</head>

<body>

<div style="background-color: #B0E0E6; padding: 2%;">
	<h1>update edit Info</h1>
	<h4>The data will be update into the main database</h4>
</div>
<br>
	<div class="ui text container">
    	<form class="ui form" method="post" action="db/12e.php">
         <div class="field">
           <div class="field">
             <div class="field">
        <label>Bill_nno</label>
        <input type="text" name="id_entry" value="<?php echo $row['Bill_no'] ?> ">
     

      <div class="field">
        <label>Treatment_charge</label>
        <input type="text" name="phone_entry" value="<?php echo $row['Treatment_charge'] ?>" placeholder="Contact Treatment_charge">
      </div>
       <div class="field">
        <label>Bed_charge</label>
        <input type="text" name="address_entry" value="<?php echo $row['Bed_charge'] ?>" placeholder="Contact Bed_charge">
      </div>
      <label>Other_charge</label>
        <input type="text" name="number_entry" value="<?php echo $row['Other_charge'] ?>" placeholder="Contact Other_charge">
      </div>
       <label>Total_bill</label>
        <input type="text" name="room_entry" value="<?php echo $row['Total_bill'] ?>" placeholder="Contact Total_bill">
      </div>
     
      
      <button class="ui button" type="submit">Submit</button>
    </form>
</div>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/semantic.min.js"></script>
</body>

</html>
