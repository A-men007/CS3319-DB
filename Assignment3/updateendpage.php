<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<h2>Update Trip End Date</h2> 
</head>
<body>
<?php
	include 'connectdb.php';
?>
<form action="" method="post" name="updatestart">
	Select The Trip You Want To Change:
	<select name= "nameid">
	<option value="0">Select Trip</option>
	<?php
		include 'getTriptoSelect.php';
	?>
	</select>
	<br>
	Enter Trip End Date: 
	<input type="date" id="start" name="trip-end">
    <input type="submit" value="Update Trip">
</form>
<p id = error></p>
<?php
if (isset($_POST['trip-end'])) {
	include "updateDate2.php";
}
?> 
</body>
</html>
