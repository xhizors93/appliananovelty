<?php
	session_start();

	if (isset($_POST['login']))
	{
		$user_name = trim(addslashes($_POST['user_name'])); 
		$user_password = trim(addslashes($_POST['user_password']));
		//$message = 'username ' . $username;
		
		if ($user_name != '' && $user_password != '')
		{	
			include 'db_connect.php';
			$sql = "SELECT user_name, role, user_password FROM app_user
					WHERE user_name = '$user_name' AND user_password = $user_password";
			$result = mysql_query($sql) or die ('Query failed.' . mysql_error());
			$row = mysql_fetch_array($result, MYSQL_ASSOC);
			
			if (mysql_num_rows($result) == 1)
			{
				$_SESSION['isLogged_in'] = true;
				$_SESSION['user_name'] = $row['user_name'];
				$_SESSION['role'] = $row['role'];
				$_SESSION['user_password'] = $row['user_password'];
				$message = 'Logged-in successfully';
			}
			
			else
				$message = 'Incorrect username or password';
		}
		
		else
			$message = 'Please enter both username and password';
	}
	else
		$message = "Please type username and password";
?>

<h2>login</h2>
<form method = "post" action = "<?php echo $_SERVER['PHP_SELF'];?>">
Username: <input name = "user_name" type = "text" /><br />
Password: <input name = "user_password" type = "text" />
<input name = "login" type = "submit" value = "Send!" />
</form>
<?php echo $message ?>