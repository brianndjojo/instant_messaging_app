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

    set_include_path('C:\Xampp3\htdocs\phpseclib1.0.18');
    
    //To generate Key Pair for RSA.
    include('Crypt/RSA.php');
   
    
    $rsa = new Crypt_RSA();
    extract($rsa->createKey());

    //Basically used to get your username from your login session.
    session_start();
    //Sends JSON encoded format of your username to the chat/client.
    $userData = array("username"=>$_SESSION["name"],"key"=>$rsa);
    echo json_encode($userData);
?>