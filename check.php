<?php session_start() ?>
<html>
<head>
<title></title>
</head>

<body>
	<h1>Welcome</h1>
    
    <?php
		echo 'Username = ' . $_SESSION['user_name'] . '<br>';
		echo 'Role = '     . $_SESSION['role'] . '<br>';
		echo 'Password = ' . $_SESSION['user_password'] . '<br>';

			include 'db_connect.php';
		?>
	
    <?php
    	if ($_SESSION['isLogged_in'] == FALSE)
			echo '<li><a href = "logindb.php">Login</a></li>';
		
		else
			echo '<li><a href = "logout.php">Logout</a></li>';
	?>
    
</body>
</html>
		
		