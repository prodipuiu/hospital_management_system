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
      $query ="SELECT * FROM nurse WHERE Nurse_id=$id";
      $result = $conn->query($query);
      $row = $result->fetch_assoc();
?>
<head>
  <meta charset="utf-8">
  <title>New Contact</title>
  <link rel="stylesheet" href="css/semantic.min.css">
</head>

<body>
  <body style="background: url(https://www.globaltimes.cn/Portals/0/attachment/2011/0da2a4f8-a551-4f88-a9f1-856eddf5e092.jpeg); background-size: 100%; "></body>

<div style="background-color: #B0E0E6; padding: 2%;">
  <h1>update edit Info</h1>
  <h4>The data will be update into the main database</h4>
</div>
<br>
  <div class="ui text container">
      <form class="ui form" method="post" action="db/111.php">
         <div class="field">
        <label>id</label>
        <input type="text" name="id_entry" value="<?php echo $row['Nurse_id'] ?> ">
      </div>
      <div class="field">
        <label>Name</label>
        <input type="text" name="name_entry" value="<?php echo $row['Nurse_name'] ?>" placeholder="Contact Name">
      </div>
      
      <div class="field">
        <label>Room</label>
        <input type="text" name="room_entry" value="<?php echo $row['Room_incharge'] ?>" placeholder="Contact Room_incharge">
      </div>

      <button class="ui button" type="submit">Submit</button>
    </form>
</div>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/semantic.min.js"></script>
</body>

</html>
