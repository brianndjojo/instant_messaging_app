<?php
    /*
    set_include_path('C:\Xampp3\htdocs\phpseclib1.0.18');
    
    //To generate Key Pair for RSA.
    include('Crypt/RSA.php');
    use phpseclib1.0.18\Crypt\RSA;
    
    $rsa = new RSA();
    extract($rsa->createKey());
    
    //Basically used to get your username from your login session.
    session_start();  
    $data = array( "username"=>$_SESSION["name"], "publicKey"=>$publickey, "privateKey"=>$privatekey );
    //Sends JSON encoded format of your username to the chat/client.
    echo json_encode($data);
    */
    //Basically used to get your username from your login session.
    session_start();

    mysql_connect("localhost", "root", "");
    mysql_select_db("comp3334");

    //phpseclib lib. To generate Key Pair for RSA.
    set_include_path('C:\Xampp3\htdocs\phpseclib1.0.18');
    
    //To generate Key Pair for RSA.
    include('Crypt/RSA.php'); 
    $rsa = new Crypt_RSA();
    extract($rsa->createKey());
    $clientName = $_SESSION["name"];
    $databaseRsa = json_encode($rsa);

    $info_result = mysql_query(" INSERT INTO comp3334.users_pk (username, publicKey) VALUES ('$clientName', '$databaseRsa') " )
        or die("Failed to query the database. ".mysql_error());

    $info_result2 = mysql_query(" INSERT INTO comp3334.users_msgs (username) VALUES ('$clientName') " )
        or die("Failed to query the database. ".mysql_error());

   
    //Sends JSON encoded format of your username to the chat/client.
    $userData = array("username"=>$_SESSION["name"], "key"=>$rsa);
    echo json_encode($userData);
?>