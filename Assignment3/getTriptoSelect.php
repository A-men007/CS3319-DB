<?php
	include 'connectdb.php';
    $query = "SELECT tripid, tripname, startdate, enddate FROM bustrip ORDER BY tripname";
    $result = mysqli_query($connection,$query);
    if (!$result) {
         die("databases trip select query failed.".mysqli_error($connection));
     }
    while ($row = mysqli_fetch_assoc($result)) {
         echo '<option value='.$row["tripid"].'>' . $row["tripname"].", From: ".$row["startdate"].", To: ".$row["enddate"]."</option>" ;
    }
    mysqli_free_result($result);
?>

