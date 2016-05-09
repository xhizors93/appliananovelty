<?php
	if (isset($_GET['ORDER_ID'])) 
	{
		$ORDER_ID = $_GET['ORDER_ID'];
		
		include 'db_connect.php';
		$query = "SELECT * FROM customer WHERE ORDER_ID = \"$ORDER_ID\"";
		$result = mysql_query($query) or die(mysql_error());

//		echo $query . ' . ' . $result . ' . ';
		
		if ($result != NULL) 
		{
			$query = "DELETE FROM customer WHERE ORDER_ID = \"$ORDER_ID\"";
			$query = "DELETE FROM app_user WHERE ORDER_ID = \"$ORDER_ID\"";
			$result = mysql_query($query) or die(mysql_error());
			header("Refresh: 0; customer_view.php");
		}
//		else
	}
?>