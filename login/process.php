<?php
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

    //localhost connect (not web based yet!)
    mysql_connect("localhost", "root", "");
    mysql_select_db("comp3334");

    //Query the information from the database for the user.
    $info_result = mysql_query(" SELECT * FROM `users` WHERE username = '$userName' " )
                        or die("Failed to query the database. ".mysql_error());
    $row = mysql_fetch_array($info_result);

    $fetchedKey = Key::loadFromAsciiSafeString($row['userKey']);
    $storedPass = Crypto::decrypt($row['password'], $fetchedKey, $raw_binary = false);
    
    if($row['username'] == $userName && $passWord == $storedPass && $row['username'] != "" && $row['password'] != "")
    {
        echo "Welcome ".$row['username'];
    }
    else 
    {
        header("Location:loginFailed.php");
        exit();
        
    }
?>

