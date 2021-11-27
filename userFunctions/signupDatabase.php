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

$username = mysqli_real_escape_string($conn, $_REQUEST['username']);
$password = mysqli_real_escape_string($conn, $_REQUEST['password']);
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO user (username, password) VALUES( '$username', '$hashedPassword' )";

if (mysqli_query($conn, $sql)) {
    header("Location:../user.php");
    echo '<script>alert("New User Created - ' .$username.'")</script>';
    echo $sql;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
