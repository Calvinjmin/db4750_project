<html>

<head>
	<title>Athletes</title>
</head>

<body>
	<h3 style="padding-left: 10px;"> Athletes </h3>
	<div style="padding-left: 10px">
		<?php

		function printList()
		{

			include_once("./library.php");
			$db_connection = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);

			if (mysqli_connect_errno()) {
				echo ("Can't connect to MySQL Server. Error code: " .  mysqli_connect_error());
				return null;
			}

			$sql = 'CALL selectAthleteLeague()';
			$result = $db_connection->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				echo "<table>";
				echo "<th>Name</td><th>Team</td><th>League</td>";
				while ($row = $result->fetch_assoc()) {
					echo "<tr>";
					echo "<td>" . $row["first_name"] . " " . $row["last_name"] . "</td>";
					echo "<td>" . $row["team_name"] . "</td>";
					echo "<td>" . $row["league_name"] . "</td>";
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
	</div>

</body>

</html>