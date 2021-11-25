<?php
    /*
    TODO - Changing the name on navbar only works once...
    */
    $changeName = $_POST['changeName'];
    $user = $_POST['username'];


    if ( $changeName == true ) {
        $_SESSION["user"] = $user;
    }

    return json_encode($_SESSION);
?>