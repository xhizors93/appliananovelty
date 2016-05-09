<?php 
		if (isset($_GET['ORDER_ID']))
		{
			$ORDER_ID = $_GET['ORDER_ID'];
		}
		else
		{
			$ORDER_ID = 0;
		}
		
		include 'db_connect.php';
		$query = "SELECT * FROM customer 
					where ORDER_ID = '$ORDER_ID'";
		$result = mysql_query($query) or die(mysql_error());
		$row = mysql_fetch_array($result, MYSQL_ASSOC);

		/*$query2 = "SELECT BORROW_BDATE, BORROW_RDATE,REMARK FROM borrow_details 
					where STUD_NRIC = '$STUD_NRIC'";
		$result2 = mysql_query($query2) or die(mysql_error());
		$row2 = mysql_fetch_array($result2, MYSQL_ASSOC);

		$query3 = "SELECT data1, data2, data3, data4, data5 FROM textbook_borrowed 
					where STUD_NRIC = '$STUD_NRIC'";
		$result3 = mysql_query($query3) or die(mysql_error());
		$row3 = mysql_fetch_array($result3, MYSQL_ASSOC); */
		
		//to edit data
		
		if(isset($_POST['edit']))
		{
			$CUST_NAME = addslashes($_POST['CUST_NAME']);
			$CUST_ADD = addslashes($_POST['CUST_ADD']);
			$CUST_PHONENUM = addslashes($_POST['CUST_PHONENUM']);
			$ITEM_DESC = addslashes($_POST['ITEM_DESC']);
			$ITEM_GB = addslashes($_POST['ITEM_GB']);
		
			include 'db_connect.php';
			$query = "UPDATE customer SET
						CUST_NAME = \"$CUST_NAME\",
						CUST_ADD = \"$CUST_ADD\",
						CUST_PHONENUM = \"$CUST_PHONENUM\",
						ITEM_DESC = \"$ITEM_DESC\",
						ITEM_GB = \"$ITEM_GB\"
					  WHERE ORDER_ID = \"$ORDER_ID\"";
			$result = mysql_query($query);
			header("Refresh: 1; customer_view.php");
			
			if($result)
				echo '<script>alert ("Edit Successful");</script>';
			
			else
				echo '<script>alert ("Edit Failed");</script>';
			
			// to requery the new data
			$query = "SELECT * FROM customer where ORDER_ID = '$ORDER_ID'";
				
			$result = mysql_query($query) or die(mysql_error());
			
			$row = mysql_fetch_array($result, MYSQL_ASSOC);
		}
?>