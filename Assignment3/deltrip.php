<?php
include 'connectdb.php';
$Tid = $_POST["nameid"];
$query = 'DELETE FROM bustrip WHERE tripid='".$Tid.";
$result = mysqli_query($connection,$query);
	if (!$result) {
		 die("Trip cannot be deleted because there are backed up bookings.".mysqli_error($connection));
	 }else{
		 echo "Update succesful!";
	 }
?>
