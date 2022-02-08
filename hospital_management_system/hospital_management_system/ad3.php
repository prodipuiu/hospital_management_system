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
    	<form class="ui form" method="post" action="db/insert2.php">
      <div class="field">
        <label>Doctornmae</label>
        <input type="text" name="phone_entry" placeholder="Contact Doctors_name">
      </div>


      <div class="field">
        <label>Doctor_id</label>
        <input type="text" name="id_entry" placeholder="Contact Doctor_id">
      </div>
       <div class="field">
        <label>Gender</label>
        <input type="text" name="gen_entry" placeholder="Contact Gender">
      </div>
      <div class="field">
      
      <div class="field">
        <label>Departmen</label>
        <input type="text" name="address_entry" placeholder="Contact Departmen">
      </div>
      <div class="field">
        <label>number</label>
        <input type="text" name="number_entry" placeholder="Contact Phone_number">
      </div>
      <div class="field">
        <label>room_incharge</label>
        <input type="text" name="room_entry" placeholder="Contact Room_incharge">
      </div>
       <div class="field">
        <label>salary</label>
        <input type="text" name="sal_entry" placeholder="Contact salary">
      </div>

      <button class="ui button" type="submit">Submit</button>
    </form>
</div>
</body>
</html>