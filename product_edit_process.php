<?php 
		if (isset($_GET['data']))
		{
			$data = $_GET['data'];
		}
		else
		{
			$data = 0;
		}
		
		include 'db_connect.php';
		$query = "SELECT * FROM textbook where data = '$data'";
				
		$result = mysql_query($query) or die(mysql_error());
		$row = mysql_fetch_array($result, MYSQL_ASSOC);
		
		//to edit data
		
		if(isset($_POST['edit']))
		{
			$BOOK_TITLE = addslashes($_POST['BOOK_TITLE']);
			$BOOK_PRICE = addslashes($_POST['BOOK_PRICE']);
		
			include 'db_connect.php';
			$query = "UPDATE textbook SET
						BOOK_TITLE = \"$BOOK_TITLE\",
						BOOK_PRICE = \"$BOOK_PRICE\"
					  WHERE data = \"$data\"";
			$result = mysql_query($query) or die(mysql_error());
			
			if($result)
				echo '<script>alert ("Edit Successful");</script>';
			
			else
				echo '<script>alert ("Edit Failed");</script>';
			
			// to requery the new data
			$query = "SELECT * FROM textbook where data = '$data'";
				
			$result = mysql_query($query) or die(mysql_error());
			
			$row = mysql_fetch_array($result, MYSQL_ASSOC);


			header("Refresh: 0; book_view.php");
		}
?>