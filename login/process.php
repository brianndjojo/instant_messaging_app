<?php
    //get login page
    $home = file_get_contents("login.php");

    //get values from user
    $userName = $_POST['username'];
    $passWord = $_POST['password'];

    //prevents mysql injection
    $userName = stripcslashes($userName);
    $passWord = stripcslashes($passWord);

    $userName = mysql_real_escape_string($userName);
    $passWord = mysql_real_escape_string($passWord);

    //localhost connect (not web based yet!)
    mysql_connect("localhost", "root", "");
    mysql_select_db("comp3334");

    //Query the information from the database for the user.
    $info_result = mysql_query(" SELECT * FROM `users` WHERE username = '$userName' AND password = '$passWord' " )
                        or die("Failed to query the database. ".mysql_error());
    $row = mysql_fetch_array($info_result);

    if($row['username'] == $userName && $row['password'] == $passWord && $row['username'] != "" && $row['password'] != "")
    {
        echo "Welcome ".$row['username'];
    }
    else 
    {
        header("Location:loginFailed.php");
        exit();
    }
?>

