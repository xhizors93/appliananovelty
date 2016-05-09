<?php
	if (isset($_POST['login']))
	{
		$user_name = trim(addslashes($_POST['user_name'])); 
		$user_password = trim(addslashes($_POST['user_password']));
		//$message = 'username ' . $username;
		
		if ($user_name != '' && $user_password != '')
		{	
			include 'db_connect.php';
			$sql = "SELECT * FROM app_user
					WHERE user_name = '$user_name' AND user_password = '$user_password'";
			$result = mysql_query($sql) or die ('Query failed.' . mysql_error());
			$row = mysql_fetch_array($result, MYSQL_ASSOC);
			
			if (mysql_num_rows($result) != 0)
			{
				$_SESSION['isLogged_in'] = true;
				$_SESSION['user_name'] = $row['USER_NAME'];
				$_SESSION['user_password'] = $row['USER_PASSWORD'];
				$_SESSION['role'] = $row['ROLE'];
				$_SESSION['name'] = $row['NAME'];
				$message = 'Logged-in successfully';
			}
			
			else
				$message = 'Incorrect username and password combination';
		}
		
		else
			$message = 'Please enter both username and password';
	}
	else
		$message = "Please enter username and password";

	if (isset($_SESSION['isLogged_in'])) 
	{
		if ($_SESSION['role'] == 'admin')
		{
			$_SESSION['USER_NAME'] = $row['USER_NAME'];
			header("Refresh: 0; admin_menu.php");
		}
			
		else if ($_SESSION['role'] == 'customer')
		{
			$_SESSION['USER_NAME'] = $row['USER_NAME'];
			header("Refresh: 0; customer_menu.php");
		}
			
		else
		{
			header("Refresh: 0; index.php");
		}
	}
	else 
	{
//		echo '<p align="center">'.$message.'</p>';
//		echo $message;
	}
?>