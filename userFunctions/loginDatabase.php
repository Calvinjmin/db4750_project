<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
<a href="../index.php"><button>Home</button></a>
<?php
    session_start();
    $session_username = $_SESSION["username"] = "";
    $session_password = $_SESSION["password"] = "";
?>
<script>
    function changeAthlete() {
		$(document).ready(function() {
			$('#changeAthlete').click(function() {
                var username = $('#usernameSecure').text();
				$.ajax({
            		type: "POST",
					url: "changeAthlete.php",
					data: {
						'username': username,
                        'athleteID': $("#athleteInput").val(),
					},
					success: function(returnedData) {
                        console.log(returnedData);
						alert("Changed Favorite Athlete!");
                        window.location.replace("../user.php");
					}
				});
			});
		});
	}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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

$session_username = $username;
$session_password = $password;

$sql = "SELECT * FROM user WHERE username = '$session_username' AND password = '$session_password'";
$result = $conn -> query($sql);

$sqlProcedure = 'CALL selectAthleteLeague()';
$resultProcedure = $conn->query($sqlProcedure);

if ($result and $resultProcedure) {
    echo "<table class=\"table is-bordered is-striped is-narrow is-hoverable\">";
    echo "<th>Username</th><th>Favorite Athlete</th><th>Change Athlete</th>";
    foreach ($result->fetch_all(MYSQLI_ASSOC) as $row) {
        echo '<tr>';
        foreach ($row as $key  => $value) {
            if ($key === "username") {
                echo '<td id="usernameSecure">' . $value . '</td>';
            }
            if ( $key === "fav_athlete" ) {
                echo '<td id="favAthlete">' . $value . '</td>'; 
            }
        }
        echo '<td>';
        echo '<input id="athleteInput" type="text" placeholder="Input Computing Id"></input>';
        echo '<button id="changeAthlete" onclick="changeAthlete();">Change Favorite Athlete</button>';
        echo '</td>';
        echo '</tr>';
    }
    echo '</table>';
    // output data of each row
    echo "<table class=\"table is-bordered is-striped is-narrow is-hoverable is-fullwidth\" style=\"  width: 50%;\">";
    echo "<th>Name</th><th>Computing ID</th><th>Team</th><th>League</th>";
    while ($row = $resultProcedure->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["first_name"] . " " . $row["last_name"] . "</td>";
        echo "<td>" . $row["computing_id"] . "</td>";
        echo "<td>" . $row["team_name"] . "</td>";
        echo "<td>" . $row["league_name"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
<?php include("../components/footer.php"); ?>

