<html>

<head>
    <title>Athletes</title>
</head>

<script>
    function deleteEntry() {
        $(document).ready(function() {
            $('.btn').unbind().click(function() {
                var computing_id = $(this).val();
                var ajaxurl = 'components/database/delete.php',
                    data = {
                        'computing_id': computing_id
                    };
                $.post(ajaxurl, data, function(response) {
                    location.reload();
                    alert("Item was deleted successfully");
                });
            });
        });

    }
</script>

<body>
    <div style="    
        margin-left: auto;
        margin-right: auto;
	    overflow: auto;">
        <h5 class="title is-5">Delete Data from our Database!</h5>
        <?php
        function tableAthletes()
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
                echo "<table class=\"table is-bordered is-striped is-narrow is-hoverable is-fullwidth\" style=\"  width: 50%;\">";
                echo "<th>Name</th><th>Team</th><th>League</th><th>Delete?</th>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["first_name"] . " " . $row["last_name"] . "</td>";
                    echo "<td>" . $row["team_name"] . "</td>";
                    echo "<td>" . $row["league_name"] . "</td>";
                    echo "<td> <button class=\"btn\" id=\"deleteButton\" onclick=\"deleteEntry()\" value = " . $row["computing_id"] . ">Delete</button></td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }
            $db_connection->close();
        }

        tableAthletes();
        ?>
    </div>

</body>

</html>