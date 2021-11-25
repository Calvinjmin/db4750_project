<?php
    /*
        TODO: Make this work for userInfo.php
    */
    include_once("../library.php");
    $conn = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);

    if (mysqli_connect_errno()) {
        echo ("Can't connect to MySQL Server. Error code: " .  mysqli_connect_error());
        return null;
    }

    $usernameForm =  $_POST['username'];
    $passwordForm =  $_POST['password'];

    echo $usernameForm;
    echo $passwordForm;

    $sql = "SELECT * FROM user WHERE username = $usernameForm AND password = $passwordForm";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_array($query);

    echo $result['username'];
    echo $result['password'];

    if ( $result['username'] != null and $result['password'] != null ) {
        echo $result['username'];
        return $result;
    }
    else {
        return null;
    }

