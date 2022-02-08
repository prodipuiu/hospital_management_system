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
    	<form class="ui form" method="post" action="db/insert5.php">
      <div class="field">
        <label>Room_type</label>
        <input type="text" name="phone_entry" placeholder="Contact Room_type">
      </div>


      <div class="field">
        <label>Room_number</label>
        <input type="text" name="id_entry" placeholder="Contact Room_number">
      </div>
      
      

      <button class="ui button" type="submit">Submit</button>
    </form>
</div>
</body>
</html>