<?php
function displayData()
{
    include_once("./library.php");
    $db_connection = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);

    $table_name = $_POST['table_name'];


    if (mysqli_connect_errno()) {
        echo ("Can't connect to MySQL Server. Error code: " .  mysqli_connect_error());
        return null;
    }

    echo "<table class=\"table is-bordered is-striped is-narrow is-hoverable is-fullwidth\">";
    $sqlHeaders = "SHOW COLUMNS FROM $table_name";
    $resultHeaders = mysqli_query($db_connection, $sqlHeaders);
    while ($row = mysqli_fetch_array($resultHeaders)) {
        echo "<th>" . $row['Field'] . "</th>";
    }

    $sql = "SELECT * FROM $table_name";
    $result = $db_connection->query($sql);
    if ($result) {
        foreach ($result->fetch_all(MYSQLI_ASSOC) as $row) {
            echo '<tr>';
            foreach ($row as $key  => $value) {
                echo '<td>' . $value . '</td>';
            }
            echo '</tr>';
        }
    }
    echo '</table>';
}
displayData();
