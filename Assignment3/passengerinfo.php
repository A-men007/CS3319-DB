<?php
$query = "SELECT DISTINCT passenger.passengerid, firstname, lastname, passportnum, citizenshipcountry, expireydate FROM passenger, passport ORDER BY lastname";

      $result = mysqli_query($connection,$query);
   	  if (!$result) {
        die("databases query failed.".mysqli_error($connection));
    	}
      echo "All Passenger Info:<br>";
    echo "<table border='1'>
      		<tr>
			<th>Passengerid</th>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Passport number</th>
            <th>Origin Country</th>
            <th>Expiry Date</th>
			</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
      		echo "<tr>";

  			echo "<td>" . $row["passenger.passengerid"] . "</td>";

  			echo "<td>" . $row["firstname"] . "</td>";

  			echo "<td>" . $row["lastname"] . "</td>";

  			echo "<td>" . $row["passportnum"] . "</td>";
      
        	echo "<td>" . $row["citizenshipcountry"] . "</td>";
      
      		echo "<td>" . $row["expireydate"] . "</td>";

  			echo "</tr>";
    }

echo "</table>";
   
   mysqli_free_result($result);

?>
