<?php

	if(isset($_POST['submit']))
	{
							//set it to writable location, a place for temp generated PNG files
							$PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;
							
							//html PNG location prefix
							$PNG_WEB_DIR = 'temp/';
						
							include "qrlib.php";    
							
							//ofcourse we need rights to create temp dir
							if (!file_exists($PNG_TEMP_DIR))
								mkdir($PNG_TEMP_DIR);
							
							
							$filename = $PNG_TEMP_DIR.'test.png';
							
							//processing form input
							$errorCorrectionLevel = 'L';
							$matrixPointSize = 4;
						
							if (isset($_REQUEST['data'])) 
							{ 
								if (trim($_REQUEST['data']) == '')
									die('isbn cannot be empty! <a href="?">back</a>');
									
								// user data
								$filename = $PNG_TEMP_DIR.$_REQUEST['data'].'.png';
								QRcode::png($_REQUEST['data'], $filename, $errorCorrectionLevel, $matrixPointSize, 2);    
							}

		$data = addslashes($_POST['data']);
		$BOOK_TITLE = addslashes($_POST['BOOK_TITLE']);
		$BOOK_PRICE = addslashes($_POST['BOOK_PRICE']);
		$BOOK_STANDARD = addslashes($_POST['BOOK_STANDARD']);
		
		include 'db_connect.php';
		$query = "INSERT INTO textbook (data, BOOK_TITLE, BOOK_PRICE, BOOK_STANDARD)
				  VALUES ('$data', '$BOOK_TITLE', '$BOOK_PRICE', '$BOOK_STANDARD')";
				
		$result = mysql_query($query) or die (mysql_error());
		
		if($result) 
		{
			echo "<script>alert('Registration Successful!'); </script>";
			$url = 'book_view.php';
    		echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
		}
		else
			echo "<script>alert('Registration Failed!'); </script>";
			
	}
	
?>