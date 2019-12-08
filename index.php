<?php

	$uri = 'https://';
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.'/login/login.php');
	exit;
?>

