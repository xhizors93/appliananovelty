<?php
	if(isset($_POST['submit']))
	{
		$ORDER_ID = addslashes($_POST['ORDER_ID']);
		$CUST_NAME = addslashes($_POST['CUST_NAME']);
		$CUST_ADD = addslashes($_POST['CUST_ADD']);
		$CUST_PHONENUM = addslashes($_POST['CUST_PHONENUM']);
		$ITEM_DESC = addslashes($_POST['ITEM_DESC']);
		$ITEM_GB = addslashes($_POST['ITEM_GB']);
		
		include 'db_connect.php';
		$query = "INSERT INTO customer (ORDER_ID, CUST_NAME, CUST_ADD, CUST_PHONENUM, ITEM_DESC, ITEM_GB)
				  VALUES ('$ORDER_ID', '$CUST_NAME', '$CUST_ADD', '$CUST_PHONENUM', '$ITEM_DESC', '$ITEM_GB')";				
		
		$target_dir = "customer_receipt/";
		$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

		//check if file is an actual or fake image
		if(isset($_POST["submit"]))
		{
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			if ($check !== false)
			{
				echo "<script> alert('File is an image - ".$check["mime"].".');</script>";
				$uploadOk = 1;
			} 

			else
			{
				echo "<script> alert('File is not an image.');</script>";
				$uploadOk = 0;
			}
		}

		//check if file already exists
		if(file_exists($target_file))
		{
			echo "<script> alert('Sorry, file is already exists.');</script>";
			$uploadOk = 0;
		}

		//check file size
		if($_FILES["fileToUpload"]["size"] > 500000)
		{
			echo "<script> alert('Sorry, your file is too large.');</script>";
			$uploadOk = 0;
		}

		//allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif")
		{
			echo "<script> alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');</script>";
			$uploadOk = 0;
		}

		//check if $uploadOk is set to 0 by an error
		if($uploadOk == 0)
			echo "<script> alert('Sorry, your file was not uploaded.'); </script>";
		//if everything is ok, try to upload file
		else
		{
			if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
				echo "<script> alert('The file ".basename($_FILES["fileToUpload"]["name"]). "has been uploaded.');</script>";
			else
				echo "<script>alert('Sorry, there was an error uploading your file.'); </script>";
		}

		$result = mysql_query($query) or die (mysql_error());

		if($result) 
		{
			echo "<script>alert('Registration Successful!'); </script>";
			$url = 'customer_view.php';
    		echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
		}
		else
			echo "<script>alert('Registration Failed!'); </script>";
			
	}
	
?>