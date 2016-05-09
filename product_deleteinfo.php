<?php
	if (isset($_GET['data'])) 
	{
		$data = $_GET['data'];
		
		include 'db_connect.php';
		$query = "SELECT * FROM textbook WHERE data = \"$data\"";
		$result = mysql_query($query) or die(mysql_error());
		
		if ($result != NULL) 
		{
			$query = "DELETE FROM textbook WHERE data = \"$data\"";
			$query2 = "DELETE FROM BOOK_BORROWED WHERE data = \"$data\"";
			
			$result = mysql_query($query);
			$result2 = mysql_query($query2);
			header("Refresh: 0; book_view.php");
		}
//		else
	}
?>