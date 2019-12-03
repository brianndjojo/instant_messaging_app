<?php
    session_start();
    define('ROOT', 'C:\Xampp3\htdocs');
    //for encryption.
    require_once(ROOT . '/encryption/defuse-crypto-php5.phar');
    use Defuse\Crypto\Crypto;
    use Defuse\Crypto\Key;

    //get values from user
    $userName = $_POST['username'];
    $passWord = $_POST['password'];

    //prevents mysql injection
    $userName = stripcslashes($userName);
    $passWord = stripcslashes($passWord);

    $userName = mysql_real_escape_string($userName);
    $passWord = mysql_real_escape_string($passWord);

    //Connect to server to get data from databases.
    mysql_connect("localhost", "root", "");
    mysql_select_db("comp3334");
    
    mysql_connect("localhost", "root", "");
    mysql_select_db("comp3334_userkeys");

    //Query the information from the database for the user.
    $info_result = mysql_query(" SELECT * FROM comp3334.users join comp3334_userkeys.userkeys WHERE comp3334.users.username = '$userName' AND comp3334_userkeys.userkeys.username = '$userName' " )
                        or die("Failed to query the database. ".mysql_error());
    $row = mysql_fetch_array($info_result);
    if($row['username'] == $userName)
    {
        $fetchedKey = Key::loadFromAsciiSafeString($row['userkey']);
        $storedPass = Crypto::decrypt($row['password'], $fetchedKey, $raw_binary = false);
        
        if($passWord == $storedPass && $row['username'] != "" && $row['password'] != "")
        {
            $_SESSION["name"] = $row['username'];
            header('location: http://localhost/chat');
        }
    }
    
    //Generates Error msg by default as login was not successful.
    echo '<div class="errorMsg"> Invalid Username or Password! </div>';
        
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User Logins</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main/reset.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/main/style.css" />
    
    <script src="process.php"></script>
</head>
<body>
    <div id="login">
        <form action = "process.php" id = "loginForm" method = "POST">
           
            <div class = "container">
                <div class = "row">
                    <div class = "col-xs-3">
                        <h1>User Login</h1>

                        <hr class = "mb-3">

                        <label><b>Username</b></label>
                        <input class = "form-control" id = "userText" type = "text" name = "username" required>

                        <label><b>Password</b></label>
                        <input class = "form-control" id = "passwordText" type = "password" name = "password" required>
                        
                        <hr class = "mb-3">

                        <input type = "submit" class="btn btn-outline-dark" id = "submitButton" value = "Login" />
            
                        <a href = "http://localhost/register/registration.php"><input type = "submit" class="btn btn-outline-dark" id = "registerButton" value = "Register"  /></a>
                    </div>
                </div>
            </div>
        </form>
    </div>    
</body>
</html>

