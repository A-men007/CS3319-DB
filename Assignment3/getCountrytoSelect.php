<?php
	include 'connectdb.php';
    $query = 'SELECT DISTINCT country FROM bustrip';
    $result = mysqli_query($connection,$query);
    if (!$result) {
         die("databases country select query failed.".mysqli_error($connection));
     }
    while ($row = mysqli_fetch_assoc($result)) {
         echo '<option value='.$row["country"].'>' ." ".$row["country"]."</option>" ;
    }
    mysqli_free_result($result);
?>
