<!doctype html>

<html lang="en">

<?php
 require_once('db_config.php');
 $bid = $_GET['bid'];
 $conn = new mysqli($servername, $username, $password, $dbname);
      if ($conn->connect_errno) {
            printf("Connect failed: %s\n", $conn->connect_error);
          exit();
      }
      $query ="SELECT * FROM paitient WHERE Paitient_id=$bid";
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
      <form class="ui form" method="post" action="db/paitient_up.php">
         <div class="field">
        <label>id</label>
        <input type="text" name="bid_entry" value="<?php echo $row['Paitient_id'] ?> ">
      </div>
      <div class="field">
        <label>Name</label>
        <input type="text" name="name_entry" value="<?php echo $row['Paitient_name'] ?>" placeholder="Contact Name">
      </div>
      <div class="field">
        <label>gender</label>
        <input type="text" name="gender_entry" value="<?php echo $row['Paitient_gender'] ?>" placeholder="Contact Paitient_gender">
      </div>
       <div class="field">
        <label>age</label>
        <input type="text" name="age_entry" value="<?php echo $row['Paitient_age'] ?>" placeholder="Contact Paitient_age">
      </div>
      <div class="field">
        <label>gorup</label>
        <input type="text" name="gorup_entry" value="<?php echo $row['Blood_group'] ?>" placeholder="Contact Blood_group">
      </div>
     

    
      <div class="field">
        <label>address</label>
        <input type="text" name="address_entry" value="<?php echo $row['Paitient_Address'] ?>" placeholder="Contact Paitient_address">
      </div>
      <div class="field">
        <label>phone</label>
        <input type="text" name="phone_entry" value="<?php echo $row['Paitient_phone'] ?>" placeholder="Contact Paitient_phone">
      </div>
      <div class="field">
        <label>Room</label>
        <input type="text" name="room_entry" value="<?php echo $row['Room'] ?>" placeholder="Contact Room">
      </div>

      <button class="ui button" type="submit">Submit</button>
    </form>
</div>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/semantic.min.js"></script>
</body>

</html>
