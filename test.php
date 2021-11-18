<html>
<head>
	<title>MySQLi Example</title>
</head>
<body>
    <h1>Database 4750</h1>
<?php

function printList() {
	
	include_once("./library.php");
	$db_connection = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
	
	/*
	or
	  require_once('dbconnect.php');

	  $db_connection = DbUtil::loginConnection();
    */
	if (mysqli_connect_errno()) {
		echo("Can't connect to MySQL Server. Error code: " .  mysqli_connect_error());
		return null;
	}
		
	$sql = 'CALL selectAthleteLeague()';
	$result = $db_connection->query($sql);
	
	if ($result->num_rows > 0) {
	  // output data of each row
      echo "<table>";
      echo "<td>Name</td><td>Team</td><td>League</td>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["first_name"]. " " . $row["last_name"]. "</td>";
            echo "<td>" . $row["team_name"]. "</td>";
            echo "<td>" . $row["league_name"]. "</td>";
            echo "</tr>";
          }
        echo "</table>";

	} else {
	  echo "0 results";
	}
	$db_connection->close();
}


printList();


?>
</body>
</html>
