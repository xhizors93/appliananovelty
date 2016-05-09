<?php 
	session_start(); 
	
	include 'db_connect.php';
	$query = 'SELECT * FROM textbook
				ORDER BY BOOK_TITLE';
	$result = mysql_query($query) or die('SQL error');
?>

<html>
<head>
	<?php include 'head_common.php'; ?>	
	<script>
		function del() {
			return confirm("Are you sure you would like to delete this book?");
		}
	</script>
</head>

<body>
	<?php include 'banner_menu.php'; ?>
	<center>
		<br>
		<div style="padding-left: 40px;">
		<h2> List of Textbooks</h2>
			<table>
				<tr style="height: 70px">
					<td  align="right">
						<section>
					      	<p>
								<form name="book_view" method="POST" action="book_searched_view.php">
									<table>
										<input name="search" type="text" placeholder="Enter ISBN or Book Title" style="font-size:16px" size="30">
										<input type="submit" name="view" style="font-size:16px" value="Search">
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
								<th> TITLE </th>
								<th> ISBN </th>
								<th> DETAILS </th> 
								<th> EDIT </th>
								<th> DELETE</th>
							</tr>
					      	<?php
								while($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
							?>
							<tr>
								<td width = "400"> <?php echo $row['BOOK_TITLE']; ?> </td>
								<td width = "150"> <?php echo $row['data']; ?> </td>
								<td width = "100"> <a href ="book_detailview.php?data=<?php echo $row['data']; ?>" >VIEW </a> </td> 
								<td width = "70"> <a href ="book_edit.php?data=<?php echo $row['data']; ?>" >EDIT</a> </td>
								<td width = "90"> <a href ="book_deleteinfo.php?data=<?php echo $row['data']; ?>" onClick="return del();">DELETE</a> </td>
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