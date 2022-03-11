<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Bus Trip</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h2>Welcome to Bustripper</h2> 
<h2>How would you like to view your trip data? (Please choose chronology and order type)</h2>
<form action="" method="post" name = "gettrip">
<input type="radio" name="val" value="tripname">Trip name &nbsp;
<input type="radio" name="val" value="country">Country<br>
<input type="radio" name="order" value="ASC">Ascending &nbsp;
<input type="radio" name="order" value="DESC">Descending<br>
<input type="submit" value="Get Trip Info">
<?php
  $type1 = $_POST["val"];
  $type2 = $_POST["order"];
?>
</form>
<h2>Scheduled Trips</h2>
<form action="gettrip.php" method="post" name = "gettrip">
<?php
	include "gettrip.php"
?>
</form>
<p>
<h2> Change Trip Information</h2>
<h3>update name:</h3>
<form action="updatenamepage.php" method="POST">
<input type="submit" value="change trip Name">
</form>
  
<h3>Update Start Date:</h3>
<form action="updatestartpage.php" method="POST">
<input type="submit" value="change start date">
</form>

<h3>Update End Date:</h3>
<form action="updateendpage.php" method="POST">
<input type="submit" value="change end date">
</form>
  
<h3>Update Trip Image:</h3>
<form action="updtimgpage.php" method="POST">
<input type="submit" value="update">
</form>
  
<h3>Delete Trips:</h3>
<form action="deltrippage.php" method="POST">
<input type="submit" value="Go">
</form>

<h3>Add New Trip:</h3>
<form action="addtrippage.php" method="POST">
<input type="submit" value="add new trip">
</form>

<h3>Trips With no Bookings:</h3>
<form action="nonbooked.php" method="POST">
<input type="submit" value="show trips">
</form>

<h3>Trips by Country:</h3>
<form action="Countrytripspage.php" method="post" name="cntry">
	Select Country:
	<select name= "country1">
	<option value="0">Select</option>
	<?php
		include 'getCountrytoSelect.php';
	?>
	</select>
	<br>
    <input type="submit" value="show trips">
</form>

<h3>Passenger Info:</h3>
<form action="" method="POST">
<?php
  include 'passengerinfo.php';
?>
<input type="submit" value="show">
</form>
<hr>
<p>
<?php
mysqli_close($connection);
?>
</body>
</html>
