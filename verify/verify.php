<?php
define('ROOT', 'C:\Xampp3\htdocs');
mysql_connect("localhost", "root", "");
mysql_select_db("comp3334");
if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['activate']) && !empty($_GET['activate'])){
	$info_result = mysql_query(" SELECT * FROM comp3334.users WHERE comp3334.users.email = '$_GET[email]'")
                        or die("Failed to query the database. ".mysql_error());
    $row = mysql_fetch_array($info_result);
    if($row['activate'] == $_GET['activate'])
    {
		mysql_query("UPDATE comp3334.users SET activate = '1' WHERE comp3334.users.email = '$_GET[email]'");
		echo 'Verification successed.';
    }
	else{
		echo'Verification failed.';
	}
}
?>