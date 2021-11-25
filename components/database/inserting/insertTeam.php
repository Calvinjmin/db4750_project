<?php
$SERVER = 'mysql01.cs.virginia.edu';
$USERNAME = 'kkz6dh';
$PASSWORD = 'Dbproject!';
$DATABASE = 'kkz6dh_';

// Create connection
$conn = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$team_id = mysqli_real_escape_string($conn, $_REQUEST['team_id']);
$team_name = mysqli_real_escape_string($conn, $_REQUEST['team_name']);
$division = mysqli_real_escape_string($conn, $_REQUEST['division']);
$league_id = mysqli_real_escape_string($conn, $_REQUEST['league_id']);

$sql = "INSERT INTO team (team_id, team_name, division, league_id)
VALUES ('$team_id','$team_name','$division','$league_id'  )";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location:../../../database.php");
