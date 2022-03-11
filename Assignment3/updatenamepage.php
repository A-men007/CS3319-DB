<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<h2>Update Trip Name</h2> 
</head>
<body>
<?php
	include 'connectdb.php';
?>
<form action="" method="post" name="updatename">
	Select The Trip You Want To Change:
	<select name= "nameid">
	<option value="0">Select Trip</option>
	<?php
		include 'getTriptoSelect.php';
	?>
	</select>
	<br>
	New Trip Name:<input type="text" name = "newName" maxlength="30"></input>
	<input type="submit" value="Update Trip">
</form>
<p id = error></p>
<?php
if (isset($_POST['newName'])) {
	include "updateName.php";
}
?> 
</body>
</html>
