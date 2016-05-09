<?php
$dir = '../images/bigimage.jpg';
if(is_file($dir))
{
echo 'File Found';
unlink($dir);
}
else
{
echo 'Not Found';
}
?>