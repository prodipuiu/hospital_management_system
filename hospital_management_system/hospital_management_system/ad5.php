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
    	<form class="ui form" method="post" action="db/insert4.php">
       <div class="field">
        <label>paitient_id</label>
        <input type="text" name="id_entry" placeholder="Contact Paitient_id">
      </div>

      <div class="field">
        <label>Paitient_name</label>
        <input type="text" name="phone_entry" placeholder="Contact Paitient_name">
      </div>
      
      <div class="field">
        <label>Paitient_gender</label>
        <input type="text" name="iod_entry" placeholder="Contact Paitient_gender">
      </div>
      <div class="field">
        <label>Paitient_age </label>
        <input type="text" name="address_entry" placeholder="Contact Paitient_age ">
      </div>
      <div class="field">
        <label>Blood_group</label>
        <input type="text" name="number_entry" placeholder="Contact Paitient_Address">
      </div>
      <div class="field">
        <label>Paitient_Address</label>
        <input type="text" name="room_entry" placeholder="Contact Paitient_Address">
      </div>
       <div class="field">
        <label>Paitient_phone</label>
        <input type="text" name="sal_entry" placeholder="Contact Paitient_phone">
      </div>
         <div class="field">
        <label>Room</label>
        <input type="text" name="mal_entry" placeholder="Contact Room">
      </div>

      <button class="ui button" type="submit">Submit</button>
    </form>
</div>
</body>
</html>