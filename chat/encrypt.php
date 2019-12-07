<?php
    session_start();
    $clientName = $_SESSION["name"];

    mysql_connect("localhost", "root", "");
    mysql_select_db("comp3334");

    //DEFUSE AES
    //define('ROOT', 'C:\Xampp3\htdocs');
    //require(ROOT . '\encryption\defuse-crypto-php5.phar')
    
     //phpseclib lib. To generate Key Pair for RSA.
    set_include_path('C:\Xampp3\htdocs\phpseclib1.0.18');
    
    //To generate Key Pair for RSA.
    include('Crypt/RSA.php'); 
   
    $user_message = $_POST["userMsg"];

    //Encrypting message using AES.
    //$AESKey = Key::createNewRandomKey();
    //$encodedMsg = Crypto::encrypt($user_message, $AESKey, $raw_binary = false);
    //$encodedAESKey = $AESKey -> saveToAsciiSafeString();

     //RSA encryption.
     //Query the information from the database for the user.
    $info_result = mysql_query(" SELECT * FROM comp3334.users_pk  WHERE comp3334.users_pk.username != '$clientName'" )
        or die("Failed to query the database. ".mysql_error());
    $row = mysql_fetch_array($info_result);

    for($i = 0; $i <= sizeof($row); $i++){
        $rsa = $row[$i]['publicKey'];
        $rsa->loadKey($publicKey);
        $cipher = $rsa->encrypt($user_message);
        $resName = $row[$i]['username'];

        $info_result2 = mysql_query(" INSERT INTO comp3334.users_msgs(encryptedMsg) VALUES ('$cipher') WHERE comp3334.users_msgs.username = '$resName' " )
            or die("Failed to query the database. ".mysql_error());
    }
?>