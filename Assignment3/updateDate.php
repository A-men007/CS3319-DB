<?php
	include 'connectdb.php';
	$value = $_POST["trip-start"];
	$Tid = $_POST["nameid"];
	$query = "UPDATE bustrip SET startdate='".$value."' WHERE tripid='".$Tid."'";
	$result = mysqli_query($connection,$query);
	if (!$result) {
		 die("databases query2 failed.".mysqli_error($connection));
	 }else{
		 echo "Update succesful!";
	 }
?>
