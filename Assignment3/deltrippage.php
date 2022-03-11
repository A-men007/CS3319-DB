<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<h2>Delete Trips</h2> 
</head>
<body>
<?php
	include 'connectdb.php';
?>
<form action="" method="post" name="updatename">
	Select The Trip You Want To Delete:
	<select name= "nameid">
	<option value="0">Select Trip</option>
	<?php
		include 'getTriptoSelect.php';
	?>
	</select>
	<br>
	<input type="submit" value="Delete">
</form>
<p id = error></p>
<?php
if (isset($_POST['Delete'])) {
	include "deltrip.php";
}
?> 
</body>
</html>
