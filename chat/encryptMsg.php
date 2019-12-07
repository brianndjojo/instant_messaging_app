<?php
    //DEFUSE AES
    define('ROOT', 'C:\Xampp3\htdocs');
    require(ROOT . '\encryption\defuse-crypto-php5.phar')
    
     //phpseclib lib. To generate Key Pair for RSA.
    set_include_path('C:\Xampp3\htdocs\phpseclib1.0.18');
    include('Crypt/RSA.php');
    
    //Encrypting message using AES.
    $newKey = Key::createNewRandomKey();
    $encodedPassword = Crypto::encrypt($reg_password, $newKey, $raw_binary = false);
    $encodedKey = $newKey -> saveToAsciiSafeString();

    //RSA encryption.
    
?>