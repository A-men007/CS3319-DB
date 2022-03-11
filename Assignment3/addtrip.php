<?php
include 'connectdb.php';
$Tname = $_POST["tnam"];
$Tid = $_POST["tid"];
$Tstart = $_POST["trip-start"];
$Tend = $_POST["trip-end"];
$Tcount = $_POST["tcount"];
$Tbus = $_POST["buslic"];
$Timg = $_POST["file"];

$query= 'INSERT INTO bustrip 
	VALUES ("'. $Tid .'","' . $Tname . '","' . $Tstart . '","' . $Tend.'","'.$Tcount.'","'.$Tbus.'","'.$Timg.'")';
	
	if (!mysqli_query($connection,$query)) {
      	echo $query;
		die ("Error while trying to add new trip, trip with Tripid key already exists!");
		
	} else {
		echo "Update succesful!";
		
	} 
?>
