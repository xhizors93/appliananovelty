<?php 
	session_start(); 
	include 'book_edit_process.php';
?>

<html>
<head>
	<?php include 'head_common.php'; ?>	
</head>

<body>
	<?php include 'banner_menu.php'; ?>
   	<center>
		<br><br>
		<H3> EDIT DETAILS </H3>
		<div style="padding-left: 300px; padding-right: 300px;">
			<form action = "book_edit.php?data=<?php echo $_GET['data']; ?>" method = "post">
				<table class="table-view">
					<tr>
						<td></td>
						<td><span>DETAILS</span></td>
					</tr>
					<tr>
					 	<td width = "107"> ISBN </td>
					 	<td width = "326"> <input style="width:500px; height: 30px; font-size:16px;" name = "data" value = "<?php echo $row['data']; ?>" type = "text" readonly/></td>
					</tr>
					<tr>
					 	<td width = "107"> Title </td>
					 	<td width = "326"> <input style="width:500px; height: 30px; font-size:16px;" name = "BOOK_TITLE" value = "<?php echo $row['BOOK_TITLE']; ?>" type = "text"/></td>
					</tr>
					<tr>
					 	<td width = "107"> Standard </td>
					 	<td width = "326"> <input style="width:500px; height: 30px; font-size:16px;" name = "data" value = "Standard <?php echo $row['BOOK_STANDARD']; ?>" type = "text" readonly/></td>
					</tr>
					<tr>
					 	<td> Price </td>
					 	<td> <input style="width:500px; height: 30px; font-size:16px;" name="BOOK_PRICE" placeholder="RM" value="<?php echo $row['BOOK_PRICE']; ?>" type = "text" size"50" maxlength="50" /></td>
					</tr>
				</table>
				<br><br>
				<p>
					<a href="book_view.php"><input class="myButton" type="button" value="Back"><a>
					<input class="myButton" type="submit" name="edit" value="Edit" >
				</p>
			</form>
		</div>
   	</center>
</body>
</html>
