<?php
    //get values from user
    $reg_username = $_POST['username'];
    $reg_password = $_POST['password'];
    $reg_confirmpass = $_POST['confirmPassword'];
    $reg_email = $_POST['email'];

    //variable used to check if username already exists
    $existUsername = mysql_query(" SELECT FROM users (username, password, email) WHERE username = $reg_username ");

    //localhost connect (not web based yet!)
    mysql_connect("localhost", "root", "");
    mysql_select_db("comp3334");

    //only create record of new user if confirm password works & when his/her username does not already exist!
    if($reg_password == $reg_confirmpass && mysql_num_rows($existUsername) >= 1)
    {
        //Query the information from the database for the user.
        $info_result = mysql_query(" INSERT INTO users (username, password, email) VALUES ('$reg_username', '$reg_password', '$reg_email') " )
            or die("Failed to query the database. ".mysql_error());
    }
    else
    {
        header("location:registration.php");
        exit();        
    }
?>