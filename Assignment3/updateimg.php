<?php
	include 'connectdb.php';
	include 'upload_file.php';
	$value = $_POST["file"];
	$Tid = $_POST["nameid"];
	$query = "UPDATE bustrip SET urlImage='".$value."' WHERE tripid='".$Tid."'";
	$result = mysqli_query($connection,$query);
	if (!$result) {
		 die("databases query2 failed.".mysqli_error($connection));
	 }else{
		 echo "Update succesful!";
	 }
?>
