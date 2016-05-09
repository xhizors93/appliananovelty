<?php 
	session_start(); 
	
	include 'db_connect.php';
	$query='SELECT * FROM customer';
	$result = mysql_query($query) or die('SQL error');
?>
<html>
<head>
	<?php include 'head_common.php'; ?>	
	<script>
		function del() {
			return confirm("Are you sure you would like to delete this customer?");
		}
	</script>
</head>

<body>
	<?php include 'banner_menu.php'; ?>
	<center>
		<br>
		<div style="padding-left: 40px;">
			<h2> List of Customers</h2>	
			<table>
				<tr style="height: 70px">
					<td  align="right">
						<section>
					      	<p>
								<form name="customer_view" method="POST" action="customer_searched_view.php">
									<table>
										<input type="text" name="search" size="30" style="font-size:16px">
										<input type="submit" name="view" style="font-size:16px" value="Search Customer by Order ID or name">
									</table>
								</form>
							</p>
				   		</section>
					</td>
				</tr>
				<tr>
					<td>
						<table class="table-view">
							<tr>
								<th> CUSTOMER NAME </th>
								<th> ORDER ID </th>
								<th> DETAILS </th> 
								<th> EDIT </th>
								<th> DELETE</th>
							</tr>
					      	<?php
								while($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
							?>
							<tr>
								<td width = "400"> <?php echo $row['CUST_NAME']; ?> </td>
								<td width = "150"> <?php echo $row['ORDER_ID']; ?> </td>
								<td width = "100"> <a href ="customer_detailview.php?ORDER_ID=<?php echo $row['ORDER_ID']; ?>" >VIEW </a> </td> 
								<td width = "70"> <a href ="customer_edit.php?ORDER_ID=<?php echo $row['ORDER_ID']; ?>" >EDIT</a> </td>
								<td width = "90"> <a href ="customer_deleteinfo.php?ORDER_ID=<?php echo $row['ORDER_ID']; ?>" onClick="return del();">DELETE</a> </td>
							<?php } ?>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			<br>
		</div>
		<input type="button" class="myButton" value="Back" name="Back" onclick="history.go(-1);" style="font-size: 15px;">
	</center>
</body>
</html>