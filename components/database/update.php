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

    $attribute = $_POST['attribute'];
    $attribute_value = $_POST['attribute_value'];
    $computing_id = $_POST['computing_id'];

    $sql = "UPDATE athlete SET $attribute = '" . $attribute_value . "' WHERE computing_id= '" . $computing_id . "'";

    if (mysqli_query($conn, $sql)) {
        echo $sql;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
