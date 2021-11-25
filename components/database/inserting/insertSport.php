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

$sport_id = mysqli_real_escape_string($conn, $_REQUEST['sport_id']);
$sport_name = mysqli_real_escape_string($conn, $_REQUEST['sport_name']);

$sql = "INSERT INTO sport (sport_id, sport_name)
VALUES ('$sport_id','$sport_name' )";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location:../../../database.php");
