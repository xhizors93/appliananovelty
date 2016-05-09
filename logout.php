<?php
	session_start();

	$_SESSION['isLogged_in'] = false;
	$_SESSION['username'] = '';
	$_SESSION['role'] = 'guest';

	session_destroy();
	header("refresh: 1.5; index.php");
	echo "<script>alert('You have logged out'); </script>";
	exit();
?>
