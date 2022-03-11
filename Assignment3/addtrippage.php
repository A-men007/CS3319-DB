<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<h2>Add A Trip</h2> 
</head>
<body>
<?php
	include 'connectdb.php';
?>
<form action="" method="post" name="ntrip">
  	Enter trip id: 
	<input type="number" name = "tid" maxlength="1000">
    <br>
    Enter trip name: 
	<input type="text" name = "tnam" maxlength="100">
    <br>
    Enter trip start date: 
	<input type="date" id="start" name="trip-start">
    <br>
    Enter trip end date: 
	<input type="date" id="end" name="trip-end">
    <br>
    Enter Country: 
	<input type="text" name = "tcount" maxlength="1000">
    <br>
	Select The Bus:
	<select name= "buslic">
	<option value="0">Select</option>
	<?php
		include 'getaBustoSelect.php';
	?>
	</select>
    <br>
    Enter New Trip Picture (.jpg or .gif): 
	<input type="text" name="file" value="NULL">
	<br>
	<input type="submit" name="fin" value="add trip">
</form>
<p id = error></p>
<?php
if (isset($_POST['tid'])&&isset($_POST['tnam'])&&isset($_POST['trip-start'])&&isset($_POST['trip-end'])&&isset($_POST['tcount'])&&isset($_POST['buslic'])) {
	include "addtrip.php";
}else{
  echo "Please complete all information for form";
      }
mysqli_close($connection);
?> 
</body>
</html>
