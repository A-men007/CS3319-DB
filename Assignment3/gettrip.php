<?php
  	include 'connectdb.php';
	$type1 = $_POST["val"];
  	$type2 = $_POST["order"];
      $query = "SELECT * FROM bustrip ORDER BY ".$type1." ". $type2;
      $result = mysqli_query($connection,$query);
   	  if (!$result) {
        die("databases query failed.".mysqli_error($connection));
    	}
      echo('Sorting by '.$type1.' in '.$type2.' order.<br>');
    echo "<table border='1'>
      		<tr>
			<th>Tripid</th>
			<th>Trip Location</th>
			<th>Start date</th>
			<th>End date</th>
            <th>Country</th>
            <th>Bus</th>
            <th>Picture</th>
			</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
      		echo "<tr>";

  			echo "<td>" . $row["tripid"] . "</td>";

  			echo "<td>" . $row["tripname"] . "</td>";

  			echo "<td>" . $row["startdate"] . "</td>";

  			echo "<td>" . $row["enddate"] . "</td>";
      
        	echo "<td>" . $row["country"] . "</td>";
      
      		echo "<td>" . $row["assignedbus"] . "</td>";

      		echo "<td>";
    		echo '<img src="' . $row["urlImage"] . '" height="60" width="60">';
      		echo "</td>";

  			echo "</tr>";
    }

echo "</table>";
   
   mysqli_free_result($result);

?>
