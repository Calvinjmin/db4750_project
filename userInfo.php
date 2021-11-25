<?php
    /*
    TODO - Changing the name on navbar only works once...
    */

    $user = "User";
    $username = "";
    $password = "";

    $changeName = $_POST['changeName'];
    $user = $_POST['username'];
    $username = $_POST['username'];

    if ( $changeName == true ) {
        $user = $_POST['username'];
        echo $user;
    }

    echo $user;
    return json_encode($user, $username);
?>