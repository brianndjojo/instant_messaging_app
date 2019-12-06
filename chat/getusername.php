<?php
    set_include_path('C:\Xampp3\htdocs\phpseclib');

    //Basically used to get your username from your login session.
    session_start();
    //Sends JSON encoded format of your username to the chat/client.
    echo json_encode($_SESSION["name"]);
?>