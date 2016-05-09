<?php 
	session_start(); 
	include'customer_registration_process.php';
?>

<html>
<head>
	<?php include 'head_common.php'; ?>						<!--1.7.2 -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script>!window.jQuery && document.write('<script src="js/jquery-1.12.0.min.js"><\/script>')</script>
	<script type="text/javascript">									//jquery-1.7.2.min.js
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
	
			//add more item to purchase
			// -- initialize with 0 --
			var startingNo = 0;
			var $node = "";
			for(varCount = 0; varCount <= startingNo; varCount++)
			{
				var displayCount = varCount + 1;
				//$node += '<p><label for = "var'+displayCount+ '">Variable '+displayCount+': </label><input type="text" name="var'+displayCount+'" id="var'+displayCount+'"><span class="removeVar">Remove Item</span></p>';
			}		
			$('form').prepend($node);
			$('form').on('click', '.removeVar', function()
			{
				$(this).parent().remove();
				//varCount--;
			});

			$('#addVar').on('click', function()
			{
				//new node
				varCount++;
				$node = '<label for="var'+varCount+'">Item : </label><select name="var'+varCount+'" id="var'+varCount+'"> \
									<option value="">Choose a selection</option> \
									<option value="iPhone 5 Refurbished">iPhone 5 Refurbished</option> \
									<option value="iPhone 5s Refurbished">iPhone 5s Refurbished</option> \
									<option value="iPhone 6 Myset">iPhone 6 Myset</option> \
									<option value="iPhone 6+ Myset">iPhone 6+ Myset</option> \
									<option value="iPhone 6s Myset">iPhone 6s Myset</option> \
									<option value="iPhone 6s+ Myset">iPhone 6s+ Myset</option> \
									<option value="iPad Mini 4 Wifi">iPad Mini 4 Wifi</option> \
									<option value="iPad Mini 4 Wifi-cellular">iPad Mini 4 Wifi-cellular</option> \
									<option value="iPad Mini 2 Wifi">iPad Mini 2 Wifi</option> \
									<option value="iPad Mini 2 Wifi-cellular">iPad Mini 2 Wifi-cellular</option> \
									<option value="iPad Air Wifi">iPad Air Wifi</option> \
									<option value="iPad Air Wifi-cellular">iPad Air Wifi-cellular</option> \
									<option value="MacBook Air 11-inch">MacBook Air 11-inch</option> \
									<option value="MacBook Air 13-inch">MacBook Air 13-inch</option> \
									<option value="iWatch 38mm">iWatch 38mm</option> \
									<option value="iWatch 42mm">iWatch 42mm</option> \
								</select> \
							GB: \
								<select name="ITEM_GB" id="option"> \
									<option value="">Choose a selection</option> \
									<option value="16">16 GB</option> \
									<option value="32">32 GB</option> \
									<option value="64">64 GB</option> \
									<option value="128">128 GB</option> \
									<option value="256">256 GB</option> \
								</select><br><br> \
								<span class="removeVar">Remove Item</span><br><br>';
				//$node = '<p><label for="var'+varCount+'">Item : </label><input type="text" name="var'+varCount+'" id="var'+varCount+'"><span class="removeVar">Remove Item</span></p><br>';
				//$(this).parent().after($node);
				$(this).before($node);
			}); 

			//end add item
		});
	</script>
</head>

<body>
	<?php include 'banner_menu.php'; ?>
	<br>
	<center>
		<h1>
			REGISTRATION<br>
			<font style="font-size:20px">
				Customer Information
			</font>
		</h1>
		<div style="padding-left: 300px; padding-right: 300px;"><br>
		<form name="customer_reg" method="post" action="customer_registration.php" enctype="multipart/form-data">
				<font face="Verdana">
				<table class="table-view">
					<tr style="font-size:15px">
						<td></td>
						<td>DETAILS</td>
					</tr>
					<tr style="font-size:15px">
						<td>Order ID:</td>
						<td>: <input name="ORDER_ID" type="text" size="50" style="font-size: 15px;"></td>
					</tr>
					<tr style="font-size:15px">
						<td>Name</td>
						<td>: <input name="CUST_NAME" type="text" size="50" style="font-size: 15px;"></td>
					</tr>
					<tr style="font-size:15px">
						<td>Address</td>
						<td>: <textarea name="CUST_ADD" type="text" rows="4" cols="40" style="font-size: 15px;"></textarea></td>
					</tr>
					<tr style="font-size:15px">
						<td>Phone No.</td>
						<td>: <input name="CUST_PHONENUM" type="text" size="50" placeholder="Enter your contact num in this format: 01X-XXXXXXX" style="font-size: 15px;"></td>
					</tr>
					<tr style="font-size:15px">
						<td>Ordered Item</td>
						<!--<td>Item:
								<select name="ITEM_DESC" id="selection">
									<option value="">Choose a selection</option>
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
									<option value="">Choose a selection</option>
									<option value="16">16 GB</option>
									<option value="32">32 GB</option>
									<option value="64">64 GB</option>
									<option value="128">128 GB</option>
									<option value="256">256 GB</option>
								</select><br><br> -->

							<!-- add item script -->
							<td>
								<label for="var1">Item : </label>
									<select name="var1" id="var1">
										<option value="">Choose a selection</option>
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
										<option value="">Choose a selection</option>
										<option value="16">16 GB</option>
										<option value="32">32 GB</option>
										<option value="64">64 GB</option>
										<option value="128">128 GB</option>
										<option value="256">256 GB</option>
									</select><br><br>
									<span class="removeVar">Remove Item</span><br><br>
							
							<!--<label for="var1"> Item </label>
							<input type="text" name="var1" id="var1"><span class="removeVar"> Remove Item </span></input>
							<br><br> -->
							<span id="addVar" class="myButton"> Add Item </span>
							<!-- end add item -->
						</td>
					</tr>
					<tr style="font-size:15px">
						<td>Bank-in Receipt</td>
						<td>Select image to upload:
						    <input type="file" name="fileToUpload" id="fileToUpload">
						</td>
					</tr>
				</table>
			</font>
			<br/><br/>
		    <p align="center">
		    	<input type="button" class="myButton" value="Back" name="Back" onclick="history.go(-1);" style="font-size: 15px;">
				<input class="myButton" type="submit" name="submit" value="Submit" style="font-size: 15px;" >
				<input class="myButton" type="reset" name="reset" value="Reset" style="font-size: 15px;">
			</p>
		</form>
	</div>
	</center>
<br><br><br><br>
</body>
</html>
