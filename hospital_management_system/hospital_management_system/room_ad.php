<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <title>New Contact</title>
  <link rel="stylesheet" href="css/semantic.min.css">
</head>

<body>

<div style="background-color: #B0E0E6; padding: 2%;">
  <h1>Insert New Contact Info</h1>
  <h4>The data will be inserted into the main database</h4>
</div>
<br>
  <div class="ui text container">
      <form class="ui form" method="post" action="db/room_up.php">
      
 <div class="field">
        <label>type</label>
        <input type="text" name="name_entry" value="<?php echo $row['Room_type'] ?>" placeholder="Contact Room_type" >
       
      <div class="field">
        <label>room_No</label>
        <input type="text" name="id_entry" value="<?php echo $row['Room_number'] ?>" >
      </div>
     
     

      <button class="ui button" type="submit">Submit</button>
    </form>
</div>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/semantic.min.js"></script>
</body>

</html>
