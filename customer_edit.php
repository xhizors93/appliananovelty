<?php 
	session_start(); 
	include 'customer_edit_process.php';
?>

<html>
<head>
	<?php include 'head_common.php'; ?>	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script type="text/javascript">
		//http://www.codeoncall.com/disable-drop-down-list-items-based-on-another-drop-down-selection/ *refer this*
		$(document).ready(function()
		{
			$("#selection").change(function()
			{
				if ( $("#selection option:selected").val() == 'iPhone 5 Refurbished')
				{
				//reset the second drop down to default position
					$("#option").val('');
					//set disabled to true or false on the second drop down	
					$("#option option[value='16']").attr('disabled',false);
					$("#option option[value='32']").attr('disabled',false);
					$("#option option[value='64']").attr('disabled',true);
					$("#option option[value='128']").attr('disabled',true);
					$("#option option[value='256']").attr('disabled',true);
				}
				
				if ( $("#selection option:selected").val() == 'iPhone 5s Refurbished')
				{
				//reset the second drop down to default position
					$("#option").val('');
					//set disabled to true or false on the second drop down	
					$("#option option[value='16']").attr('disabled',false);
					$("#option option[value='32']").attr('disabled',false);
					$("#option option[value='64']").attr('disabled',false);
					$("#option option[value='128']").attr('disabled',true);
					$("#option option[value='256']").attr('disabled',true);
				}

				if ( $("#selection option:selected").val() == 'iPhone 6 Myset')
				{
				//reset the second drop down to default position
					$("#option").val('');
					//set disabled to true or false on the second drop down	
					$("#option option[value='16']").attr('disabled',false);
					$("#option option[value='32']").attr('disabled',true);
					$("#option option[value='64']").attr('disabled',false);
					$("#option option[value='128']").attr('disabled',false);
					$("#option option[value='256']").attr('disabled',true);
				}

				if ( $("#selection option:selected").val() == 'iPhone 6+ Myset')
				{
				//reset the second drop down to default position
					$("#option").val('');
					//set disabled to true or false on the second drop down	
					$("#option option[value='16']").attr('disabled',false);
					$("#option option[value='32']").attr('disabled',true);
					$("#option option[value='64']").attr('disabled',false);
					$("#option option[value='128']").attr('disabled',false);
					$("#option option[value='256']").attr('disabled',true);
				}

				if ( $("#selection option:selected").val() == 'iPhone 6s Myset')
				{
				//reset the second drop down to default position
					$("#option").val('');
					//set disabled to true or false on the second drop down	
					$("#option option[value='16']").attr('disabled',false);
					$("#option option[value='32']").attr('disabled',true);
					$("#option option[value='64']").attr('disabled',false);
					$("#option option[value='128']").attr('disabled',false);
					$("#option option[value='256']").attr('disabled',true);
				}

				if ( $("#selection option:selected").val() == 'iPhone 6s+ Myset')
				{
				//reset the second drop down to default position
					$("#option").val('');
					//set disabled to true or false on the second drop down	
					$("#option option[value='16']").attr('disabled',false);
					$("#option option[value='32']").attr('disabled',true);
					$("#option option[value='64']").attr('disabled',false);
					$("#option option[value='128']").attr('disabled',false);
					$("#option option[value='256']").attr('disabled',true);
				}

				if ( $("#selection option:selected").val() == 'iPad Mini 4 Wifi')
				{
				//reset the second drop down to default position
					$("#option").val('');
					//set disabled to true or false on the second drop down	
					$("#option option[value='16']").attr('disabled',false);
					$("#option option[value='32']").attr('disabled',true);
					$("#option option[value='64']").attr('disabled',false);
					$("#option option[value='128']").attr('disabled',false);
					$("#option option[value='256']").attr('disabled',true);
				}

				if ( $("#selection option:selected").val() == 'iPad Mini 4 Wifi-cellular')
				{
				//reset the second drop down to default position
					$("#option").val('');
					//set disabled to true or false on the second drop down	
					$("#option option[value='16']").attr('disabled',false);
					$("#option option[value='32']").attr('disabled',true);
					$("#option option[value='64']").attr('disabled',false);
					$("#option option[value='128']").attr('disabled',false);
					$("#option option[value='256']").attr('disabled',true);
				}

				if ( $("#selection option:selected").val() == 'iPad Air Wifi')
				{
				//reset the second drop down to default position
					$("#option").val('');
					//set disabled to true or false on the second drop down	
					$("#option option[value='16']").attr('disabled',false);
					$("#option option[value='32']").attr('disabled',false);
					$("#option option[value='64']").attr('disabled',true);
					$("#option option[value='128']").attr('disabled',true);
					$("#option option[value='256']").attr('disabled',true);
				}

				if ( $("#selection option:selected").val() == 'iPad Air Wifi-cellular')
				{
				//reset the second drop down to default position
					$("#option").val('');
					//set disabled to true or false on the second drop down	
					$("#option option[value='16']").attr('disabled',false);
					$("#option option[value='32']").attr('disabled',false);
					$("#option option[value='64']").attr('disabled',true);
					$("#option option[value='128']").attr('disabled',true);
					$("#option option[value='256']").attr('disabled',true);
				}

				if ( $("#selection option:selected").val() == 'iPad Mini 2 Wifi')
				{
				//reset the second drop down to default position
					$("#option").val('');
					//set disabled to true or false on the second drop down	
					$("#option option[value='16']").attr('disabled',false);
					$("#option option[value='32']").attr('disabled',false);
					$("#option option[value='64']").attr('disabled',true);
					$("#option option[value='128']").attr('disabled',true);
					$("#option option[value='256']").attr('disabled',true);
				}

				if ( $("#selection option:selected").val() == 'iPad Mini 2 Wifi-cellular')
				{
				//reset the second drop down to default position
					$("#option").val('');
					//set disabled to true or false on the second drop down	
					$("#option option[value='16']").attr('disabled',false);
					$("#option option[value='32']").attr('disabled',false);
					$("#option option[value='64']").attr('disabled',true);
					$("#option option[value='128']").attr('disabled',true);
					$("#option option[value='256']").attr('disabled',true);
				}

				if ( $("#selection option:selected").val() == 'MacBook Air 11-inch')
				{
				//reset the second drop down to default position
					$("#option").val('');
					//set disabled to true or false on the second drop down	
					$("#option option[value='16']").attr('disabled',true);
					$("#option option[value='32']").attr('disabled',true);
					$("#option option[value='64']").attr('disabled',true);
					$("#option option[value='128']").attr('disabled',false);
					$("#option option[value='256']").attr('disabled',false);
				}

				if ( $("#selection option:selected").val() == 'MacBook Air 13-inch')
				{
				//reset the second drop down to default position
					$("#option").val('');
					//set disabled to true or false on the second drop down	
					$("#option option[value='16']").attr('disabled',true);
					$("#option option[value='32']").attr('disabled',true);
					$("#option option[value='64']").attr('disabled',true);
					$("#option option[value='128']").attr('disabled',false);
					$("#option option[value='256']").attr('disabled',false);
				}

				if ( $("#selection option:selected").val() == 'iWatch 38mm')
				{
				//reset the second drop down to default position
					$("#option").val('');
					//set disabled to true or false on the second drop down	
					$("#option option[value='16']").attr('disabled',true);
					$("#option option[value='32']").attr('disabled',true);
					$("#option option[value='64']").attr('disabled',true);
					$("#option option[value='128']").attr('disabled',true);
					$("#option option[value='256']").attr('disabled',true);
				}

				if ( $("#selection option:selected").val() == 'iWatch 42mm')
				{
				//reset the second drop down to default position
					$("#option").val('');
					//set disabled to true or false on the second drop down	
					$("#option option[value='16']").attr('disabled',true);
					$("#option option[value='32']").attr('disabled',true);
					$("#option option[value='64']").attr('disabled',true);
					$("#option option[value='128']").attr('disabled',true);
					$("#option option[value='256']").attr('disabled',true);
				}
			});
		});
	</script>
</head>

<body>
	<?php include 'banner_menu.php'; ?>
   	<center>
   		<div style="padding-left: 300px; padding-right: 300px;">
		<br><br>
		<H3> EDIT PROFILE </H3>
		<br><br>
		<form action = "customer_edit.php?ORDER_ID=<?php echo $_GET['ORDER_ID']; ?>" method = "post">
		<table class="table-view">
			<tr>
				<td></td>
				<td><span>DETAILS</span></td>
			</tr>
			<tr>
			 	<td width = "107"> Order ID </td>
			 	<td width = "326"> <input style="width:500px; height: 30px; font-size:16px;" name = "ORDER_ID" value = "<?php echo $row['ORDER_ID']; ?>" type = "text" readonly/></td>
			</tr>
			<tr>
			 	<td width = "107"> Customer Name </td>
			 	<td width = "326"> <input style="width:500px; height: 30px; font-size:16px;" name = "CUST_NAME" value = "<?php echo $row['CUST_NAME']; ?>" type = "text"/></td>
			</tr>
			<tr>
			 	<td width = "107"> Customer Address </td>
			 	<td width = "326"> <input style="width:500px; height: 30px; font-size:16px;" name = "CUST_ADD" value = "<?php echo $row['CUST_ADD']; ?>" type = "text"/></td>
			</tr>
			<tr>
			 	<td width = "107"> Customer Phone No. </td>
			 	<td width = "326"> <input style="width:500px; height: 30px; font-size:16px;" name = "CUST_PHONENUM" value = "<?php echo $row['CUST_PHONENUM']; ?>" type = "text"/></td>
			</tr>
			<tr>
				<td width = "107">Ordered Item</td>
				<td width = "326">Item:
					<select name="ITEM_DESC" id="selection">
						<option value="<?php echo $row['ITEM_DESC']; ?>"></option>
						<option value="iPhone 5 Refurbished">iPhone 5 Refurbished</option>
						<option value="iPhone 5s Refurbished">iPhone 5s Refurbished</option>
						<option value="iPhone 6 Myset">iPhone 6 Myset</option>
						<option value="iPhone 6+ Myset">iPhone 6+ Myset</option>
						<option value="iPhone 6s Myset">iPhone 6s Myset</option>
						<option value="iPhone 6s+ Myset">iPhone 6s+ Myset</option>
						<option value="iPad Mini 4 Wifi">iPad Mini 4 Wifi</option>
						<option value="iPad Mini 4 Wifi-cellular">iPad Mini 4 Wifi-cellular</option>
						<option value="iPad Mini 2 Wifi">iPad Mini 2 Wifi</option>
						<option value="iPad Mini 2 Wifi-cellular">iPad Mini 2 Wifi-cellular</option>
						<option value="iPad Air Wifi">iPad Air Wifi</option>
						<option value="iPad Air Wifi-cellular">iPad Air Wifi-cellular</option>
						<option value="MacBook Air 11-inch">MacBook Air 11-inch</option>
						<option value="MacBook Air 13-inch">MacBook Air 13-inch</option>
						<option value="iWatch 38mm">iWatch 38mm</option>
						<option value="iWatch 42mm">iWatch 42mm</option>
					</select>               
					GB:
					<select name="ITEM_GB" id="option">
						<option value="<?php echo $row['ITEM_GB']; ?>"></option>
						<option value="16">16 GB</option>
						<option value="32">32 GB</option>
						<option value="64">64 GB</option>
						<option value="128">128 GB</option>
						<option value="256">256 GB</option>
					</select><br>
				</td>
			</tr>
		</table>
		<br><br>
		<p align="center">
			<a href="customer_view.php"><input class="myButton" type="button" value="Back"><a>
			<input class="myButton" type="submit" name="edit" value="Edit" >
		</p>
		</form>
   	</center>
<br>
</body>
</html>
