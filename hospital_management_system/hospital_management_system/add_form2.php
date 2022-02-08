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
    	<form class="ui form" method="post" action="db/insert1.php">
      <div class="field">
        <label>id</label>
        <input type="text" name="id_entry" placeholder="Contact Bill_no">
      </div>
      <div class="field">
        <label>Treatment_charge</label>
        <input type="text" name="phone_entry" placeholder="Contact Treatment_charge">
      </div>
      <div class="field">
        <label>Bed_charge</label>
        <input type="text" name="address_entry" placeholder="Contact Bed_charge">
      </div>
      <div class="field">
        <label>Other_charge</label>
        <input type="text" name="number_entry" placeholder="Contact Other_charge">
      </div>
      <div class="field">
        <label>totall_bill</label>
        <input type="text" name="room_entry" placeholder="Contact Total_bill">
      </div>

      <button class="ui button" type="submit">Submit</button>
    </form>
</div>
</body>
</html>