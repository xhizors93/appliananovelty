<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <title>Appliana Novelty</title>
</head>
<body>
<style type="javascript">
	window.onbeforeunload = function()
	{ window.scrollTo(0,0); }
</style>

	<div class = "container">
	  		<div class = "header">
	        	<img src = "images/banner_small.png" width = "962" height = "200" id = "Insert_logo" style = "background-color: #1c1717; display:block;">
	   		</div>
	  
	  	<div id = "cssmenu">
			<ul>
				<?php 
					if (isset($_SESSION['isLogged_in'])) 
					{
						if ($_SESSION['role'] == 'admin')
						{
				?>
						<li><a href = "register.php"><span>REGISTRATION</span></a></li>
						<!--<li><a href = "borrow_return.php"><span>BORROWING & RETURNING</span></a></li>
						<li><a href = "admin_menu.php"><span>ADMIN</a></span></li>-->
						<li><a href='customer_view.php'><span>CUSTOMER</span></a></li>
		                <!--<li class='has-sub'><a href='book_view.php'><span>TEXTBOOKS</span></a>
		                	<ul>
			                  <li class='last'><a href='book_view_std1.php'><span>Standard 1</span></a></li>
			                  <li class='last'><a href='book_view_std2.php'><span>Standard 2</span></a></li>
			                  <li class='last'><a href='book_view_std3.php'><span>Standard 3</span></a></li>
			                  <li class='last'><a href='book_view_std4.php'><span>Standard 4</span></a></li>
			                  <li class='last'><a href='book_view_std5.php'><span>Standard 5</span></a></li>
			                  <li class='last'><a href='book_view_std6.php'><span>Standard 6</span></a></li>
		               		</ul>
		                </li>-->
		                <li><a href='product_view.php'><span>PRODUCTS</span></a></li>
						<li><a href = "logout.php"><span>LOGOUT</span></a></li>
				<?php 	} 
						
						else if ($_SESSION['role'] == 'customer')
						{
				?>
						<li><a href = "register_staffonly.php"><span>PROFILE</span></a></li>
						<li><a href = "#"><span>GALLERY</span></a></li>
						<li><a href = "logout.php"><span>LOGOUT</span></a></li>
				<?php 	}
					
					}
					
					else {
				?>
	            <li><a href = ""><span>Q & A</span></a></li>
	            <li><a href = "login.php"><span>LOGIN</span></a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</body>
<html>