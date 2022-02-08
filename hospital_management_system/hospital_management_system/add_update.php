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
      $query ="SELECT * FROM admin WHERE Id=$id";
      $result = $conn->query($query);
      $row = $result->fetch_assoc();
?>
<head>
  <meta charset="utf-8">
  <title>New Contact</title>
  <link rel="stylesheet" href="css/semantic.min.css">
</head>

<body>

<div style="background-color: #B0E0E6; padding: 2%;">
	<h1>update edit Info</h1>
	<h4>The data will be update into the main database</h4>
</div>
<br>
	<div class="ui text container">
    	<form class="ui form" method="post" action="db/update.php">
         <div class="field">
        <label>id</label>
        <input type="text" name="id_entry" value="<?php echo $row['Id'] ?> ">
      </div>
      <div class="field">
        <label>Name</label>
        <input type="text" name="name_entry" value="<?php echo $row['Name'] ?>" placeholder="Contact Name">
      </div>
      <div class="field">
        <label>Phone Number</label>
        <input type="text" name="phone_entry" value="<?php echo $row['Phone'] ?>" placeholder="Contact Number">
      </div>
      <div class="field">
        <label>Address</label>
        <input type="text" name="address_entry" value="<?php echo $row['address'] ?>" placeholder="Contact Address">
      </div>

      <button class="ui button" type="submit">Submit</button>
    </form>
</div>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/semantic.min.js"></script>
</body>

</html>
