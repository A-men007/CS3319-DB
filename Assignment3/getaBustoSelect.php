<?php
	include 'connectdb.php';
    $query = "SELECT DISTINCT assignedbus FROM bustrip";
    $result = mysqli_query($connection,$query);
    if (!$result) {
         die("databases bus select query failed.".mysqli_error($connection));
     }
    while ($row = mysqli_fetch_assoc($result)) {
         echo '<option value='.$row["assignedbus"].'>' ." ".$row["assignedbus"]."</option>" ;
    }
    mysqli_free_result($result);
?>
