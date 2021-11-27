<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<html>
    <h1>Testing</h1>
</html>
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

$username = $_POST['username'];
$new_athlete = $_POST['athleteID'];

$sql = "UPDATE user SET fav_athlete = '$new_athlete' WHERE username = '$username'";
$result = $conn -> query($sql);

if ($result) {
    echo $result;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>

