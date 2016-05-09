<?php
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('ERROR CONNECTING TO DATABASE');
	$dbname = 'espbt';
	mysql_select_db($dbname);
?>