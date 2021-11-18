<html>
<head>
	<title>MySQLi Example</title>
</head>
<body>
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
		
	$sql = "SELECT computing_id, first_name, last_name FROM athlete";
	$result = $db_connection->query($sql);
	
	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
		echo "id: " . $row["computing_id"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>";
	  }
	} else {
	  echo "0 results";
	}
	$db_connection->close();
}


printList();


?>
</body>
</html>
