<?php 
	session_start(); 
	include 'customer_edit_process.php';
?>


<html>
<head>
	<?php include 'head_common.php'; ?>	
</head>

<body>
	<?php include 'banner_menu.php'; ?>
   	<center>
   		<br>
		<div style="padding-left: 300px; padding-right: 300px;">
		<H3> CUSTOMER'S PROFILE </H3>
		<br><br>
		<table class="table-view">
			<tr>
				<td></td>
				<td><span>DETAILS</span></td>
			</tr>
			<tr>
			 	<td>Order ID  </td>
			 	<td>: <?php echo $row['ORDER_ID']; ?></td>
			</tr>
			<tr>
			 	<td>Name  </td>
			 	<td>: <?php echo $row['CUST_NAME']; ?></td>
			</tr>
			<tr>
			 	<td> Address </td>
			 	<td>: <?php echo $row['CUST_ADD']; ?></td>
			</tr>
			<tr>
			 	<td> Phone No.  </td>
			 	<td>: <?php echo $row['CUST_PHONENUM']; ?></td>
			</tr>
			<tr>
			 	<td> Ordered Item  </td>
			 	<td>: <?php echo $row2['ITEM_DESC']; echo $row2['ITEM_GB']; ?></td>
			</tr>
			<tr>
				<td>Bank-in Receipt</td>
				<td><img src="http://localhost/novelty/customer_receipt/<?php echo $row['ORDER_ID']; ?>.png" style="width:128px;height:128px;"></td>
			</tr>
			<tr>
			 	<td> Remark  </td>
			 	<td>: <?php echo $row2['REMARK']; ?></td>
			</tr>
			
			
		</table>
		<br><br>
			<input type="button" class="myButton" value="Back" name="Back" onclick="history.go(-1);" style="font-size: 15px;">
			<!--<a href="bookborrow_return.php?STUD_NRIC=<?php echo $_GET['STUD_NRIC']; ?>"><input class="myButton" type="button" value="Return Book"><a>
			<a href="bookborrow_return.php?STUD_NRIC=<?php //echo $_GET['STUD_NRIC']; ?>" type="button" class="myButton" value="Return Book">Return Book</a>-->
</body>
</html>
