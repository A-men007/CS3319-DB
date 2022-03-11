<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<h2>Update Trip Images</h2> 
</head>
<body>
<?php
	include 'connectdb.php';
	include 'upload_file.php';
?>
<form action="" method="post" name="updateimg">
	Select The Trip You Want To Change:
	<select name= "nameid">
	<option value="0">Select Trip</option>
	<?php
		include 'getTriptoSelect.php';
	?>
	</select>
	<br>
	Enter New Trip Picture (.jpg or .gif): 
	<input type="text" name = "file"></input><br>
    <input type="submit" value="Update Trip">
</form>
<p id = error></p>
<?php
if (isset($_POST['file'])) {
	include "updateimg.php";
}
?> 
</body>
</html>
