<?php
	include 'connectdb.php';
	$newName = $_POST["newName"];
	$Tid = $_POST["nameid"];
	$query = "UPDATE bustrip SET tripname='".$newName."' WHERE tripid='".$Tid."'";
	$result = mysqli_query($connection,$query);
	if (!$result) {
		 die("databases query2 failed.".mysqli_error($connection));
	 }else{
		 echo "Update succesful!";
	 }
?>
