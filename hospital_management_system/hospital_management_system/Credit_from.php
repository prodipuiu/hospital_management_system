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
      $query ="SELECT * FROM hospital_credit_money WHERE doctors_totall=$id";
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
    	<form class="ui form" method="post" action="db/Credit_e.php">
         <div class="field">
           <div class="field">
             <div class="field">
        <label>doctors_totall</label>
        <input type="text" name="id_entry" value="<?php echo $row['doctors_totall'] ?> ">
     

      <div class="field">
        <label>nurse_toall</label>
        <input type="text" name="phone_entry" value="<?php echo $row['nurse_toall'] ?>" placeholder="Contact nurse_toall">
      </div>
       <div class="field">
        <label>others_toall</label>
        <input type="text" name="address_entry" value="<?php echo $row['others_toall'] ?>" placeholder="Contact others_toall">
      </div>
      <label>totall_credit</label>
        <input type="text" name="number_entry" value="<?php echo $row['totall_credit'] ?>" placeholder="Contact totall_credit">
      </div>
       
     
      
      <button class="ui button" type="submit">Submit</button>
    </form>
</div>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/semantic.min.js"></script>
</body>

</html>
