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
   		<br>
		<div style="padding-left: 300px; padding-right: 300px;">
		<H3> TEXTBOOK DETAILS </H3>
		<br><br>
		<table class="table-view">
			<tr>
				<td></td>
				<td><span>DETAILS</span></td>
			</tr>
			<tr>
				<td>QR code</td>
				<td><img src="http://localhost/espbt/temp/<?php echo $row['data']; ?>.png" style="width:128px;height:128px;"></td>
			</tr>
			<tr>
			 	<td>ISBN  </td>
			 	<td>: <?php echo $row['data']; ?></td>			
			</tr>
			<tr>
			 	<td>Title  </td>
			 	<td>: <?php echo $row['BOOK_TITLE']; ?></td>			
			</tr>
			<tr>
			 	<td>Standard  </td>
			 	<td>: Standard <?php echo $row['BOOK_STANDARD']; ?></td>			
			</tr>
			<tr>
			 	<td>Price  </td>
			 	<td>: RM <?php echo $row['BOOK_PRICE']; ?></td>			
			</tr>			
		</table>
		<br><br>
		<center>
			<input type="button" class="myButton" value="Back" name="Back" onclick="history.go(-1);" style="font-size: 15px;">
		</center><br><br><br>
   	</center>
</body>
</html>
