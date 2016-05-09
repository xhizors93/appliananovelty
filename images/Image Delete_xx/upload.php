<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Store Images</title>
</head>

<body>
<?php
include 'config.php';
error_reporting(E_ALL ^ E_NOTICE);
if(isset($_POST['submit']))
{
$target = "images/";
$target = $target . basename( $_FILES['photo']['name']); 
$name = $_POST['name'];
$email = $_POST['email'];
$pic = ($_FILES['photo']['name']);
$sql = mysql_query("INSERT INTO `myimages` (`name`, `email`, `picture`) VALUES ('$name', '$email', '$pic');"); 

if(move_uploaded_file($_FILES['photo']['tmp_name'], $target))
{
echo '<center>Image uploaded Saved Success</center>';
}
else
{
echo '<center>Not Saved</center>';
}
}
?>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
<table align="center">
<tr>
	<td>Name :</td>
	<td><input type="text" name="name" /></td>
</tr>
<tr>
	<td>Email :</td>
	<td><input type="text" name="email" /></td>
</tr>
<tr>
	<td>Photo</td>
	<td><input type="file" name="photo" /></td>
</tr>
<tr>
	<td><input type="submit" value="add" name="submit" /></td>
	<td><input type="reset" value="clear All" /></td>
</tr>
</table>
</form>
</body>
</html>
