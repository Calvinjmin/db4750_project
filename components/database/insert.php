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

$computing_id = mysqli_real_escape_string($conn, $_REQUEST['computing_id']);
$first_name = mysqli_real_escape_string($conn, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($conn, $_REQUEST['last_name']);
$age = mysqli_real_escape_string($conn, $_REQUEST['age']);
$grad_year = mysqli_real_escape_string($conn, $_REQUEST['grad_year']);
$team_id = mysqli_real_escape_string($conn, $_REQUEST['team_id']);


$sql = "INSERT INTO athlete (computing_id, first_name, last_name, age, grad_year, status, team_id)
VALUES ('$computing_id','$first_name','$last_name','$age','$grad_year', '1', '$team_id' )";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location:../../index.php");
