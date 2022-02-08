<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <title>New Add</title>
  <link rel="stylesheet" href="css/semantic.min.css">
</head>

<body>

<div style="background-color: #B0E0E6; padding: 2%;">
	<h1>Insert New Contact Info</h1>
	<h4>The data will be inserted into the main database</h4>
</div>
<br>
	<div class="ui text container">
    	<form class="ui form" method="post" action="db/insert.php">
      <div class="field">
        <label>Name</label>
        <input type="text" name="name_entry" placeholder="Contact Name">
      </div>
      <div class="field">
        <label>Phone</label>
        <input type="text" name="phone_entry" placeholder="Contact Number">
      </div>
      <div class="field">
        <label>Address</label>
        <input type="text" name="address_entry" placeholder="Contact Address">
      </div>

      <button class="ui button" type="submit">Submit</button>
    </form>
</div>
<div style="background-color: #B0E0E6; padding: 2%;">
  <h1>Insert New Contact Info</h1>
  <h4>The data will be inserted into the main database</h4>
</div>
<br>
  <div class="ui text container">
      <form class="ui form" method="post" action="db/insert.php">
      <div class="field">
        <label>Doctors_name</label>
        <input type="text" name="Department_entry" placeholder="Contact Name">
      </div>
      <div class="field">
        <label>Phone_number</label>
        <input type="text" name="phone_entry" placeholder="Contact Number">
      </div>
      <div class="field">
        <label>Room_inchar</label>
        <input type="text" name="Room_incharge_entry" placeholder="Contact Address">
      </div>
       <div class="field">
        <label>salary</label>
        <input type="text" name="salary" placeholder="Contact Address">
      </div>

      <button class="ui button" type="submit">Submit</button>
    </form>
</div>

<div style="background-color: #B0E0E6; padding: 2%;">
  <h1>Insert New Contact Info</h1>
  <h4>The data will be inserted into the main database</h4>
</div>
<br>
  <div class="ui text container">
      <form class="ui form" method="post" action="db/insert.php">
      <div class="field">
        <label>Nurse_name</label>
        <input type="text" name="name_entry" placeholder="Contact Name">
      </div>
      <div class="field">
        <label>Room_incharge</label>
        <input type="text" name="Room_entry" placeholder="Contact Number">
      </div>
     

      <button class="ui button" type="submit">Submit</button>
    </form>
</div>
<div style="background-color: #B0E0E6; padding: 2%;">
  <h1>Insert New Contact Info</h1>
  <h4>The data will be inserted into the main database</h4>
</div>
<br>
  <div class="ui text container">
      <form class="ui form" method="post" action="db/insert.php">
      <div class="field">
        <label>Paitient_name</label>
        <input type="text" name="a_entry" placeholder="Contact Name">
      </div>
      <div class="field">
        <label>Patient_gender</label>
        <input type="text" name="b_entry" placeholder="Contact Number">
      </div>
      <div class="field">
        <label>Patient_age</label>
        <input type="text" name="c_entry" placeholder="Contact Address">
      </div>
       <div class="field">
        <label>Blood_group</label>
        <input type="text" name="d_entry" placeholder="Contact Blood_group">
      </div>
       <div class="field">
        <label>Paitient_Address</label>
        <input type="text" name="e_entry" placeholder="Contact Paitient_Address">
      </div>
      

      <button class="ui button" type="submit">Submit</button>
    </form>
</div>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/semantic.min.js"></script>
</body>

</html>
