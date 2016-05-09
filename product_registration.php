<?php 
	session_start(); 
	include'book_registration_process.php';
?>

<html>
<head>
	<?php include 'head_common.php'; ?>	
</head>

<body>
	<?php include 'banner_menu.php'; ?>
	<br>
	<center>
		<h1>
			REGISTRATION<br>
			<font style="font-size:20px">
				Product Information
			</font>
		</h1>
		<div style="padding-left: 300px; padding-right: 300px;"><br>	
			<form name="book_reg" method="post" action="book_registration.php">
			<font face="Verdana">
				<table class="table-view">
					<tr style="font-size:15px">
						<td></td>
						<td>DETAILS</td>
					</tr>
					<tr style="font-size:15px">
						<td>ISBN</td>
						<td>: <input name="data" type="text" size="50" style="font-size: 15px;"><br></td>

						<!-- qrcode -->
					</tr>
					<tr style="font-size:15px">
						<td>Title</td>
						<td>: <input name="BOOK_TITLE" type="text" size="50" style="font-size: 15px;"><br></td>
					</tr>
					<tr style="font-size:15px">
						<td>Standard</td>
						<td>: 
							<select name="BOOK_STANDARD" style="font-size: 15px;">
								<option>Select an option</option>
								<option value="1">Standard 1</option>
								<option value="2">Standard 2</option>
								<option value="3">Standard 3</option>
								<option value="4">Standard 4</option>
								<option value="5">Standard 5</option>
								<option value="6">Standard 6</option>
							</select><br>
						</td>
					</tr>
					<tr style="font-size:15px">
						<td>Price</td>
						<td>: RM <input name="BOOK_PRICE" type="text" size="50" style="font-size: 15px;"><br></td>
					</tr>
				</table>
			</font>
				<br/><br/>
			    <p align="center">
			    	<input type="button" class="myButton" value="Back" name="Back" onclick="history.go(-1);" style="font-size: 15px;">
					<input type="submit" class="myButton" name="submit" value="Submit" style="font-size: 15px;" >
					<input type="reset" class="myButton" name="reset" value="Reset" style="font-size: 15px;">
				</p>
			</form>
		</div>
	</center>
<br><br>
</body>
</html>
