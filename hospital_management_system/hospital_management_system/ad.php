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
      $query ="SELECT * FROM doctor WHERE Doctors_id=$id";
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
    	<form class="ui form" method="post" action="db/inp.php">
         <div class="field">
           <div class="field">
        <label>Name</label>
        <input type="text" name="name_entry" value="<?php echo $row['Doctors_name'] ?>" placeholder="Contact Name">
      </div>
        <label>id</label>
        <input type="text" name="id_entry" value="<?php echo $row['Doctors_id'] ?> ">
      </div>
      <div class="field">
        <label>gender</label>
        <input type="text" name="phone_entry" value="<?php echo $row['Gender'] ?>" placeholder="Contact Gender">
      </div>
       <div class="field">
        <label>department</label>
        <input type="text" name="address_entry" value="<?php echo $row['Departmen'] ?>" placeholder="Contact Departmen">
      </div>
      <label>number</label>
        <input type="text" name="number_entry" value="<?php echo $row['Phone_number'] ?>" placeholder="Contact Phone_number">
      </div>
       <label>room</label>
        <input type="text" name="room_entry" value="<?php echo $row['Room_incharge'] ?>" placeholder="Contact Room_incharge">
      </div>
       <label>salary</label>
        <input type="text" name="ssalary_entry" value="<?php echo $row['salary'] ?>" placeholder="Contact ssalary">
      </div>
     
      
      <button class="ui button" type="submit">Submit</button>
    </form>
</div>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/semantic.min.js"></script>
</body>

</html>
