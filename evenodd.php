<!DOCTYPE html>
<html>
<head>
<title> evenodd </title>
<?php
		$x=$_POST['no'];
		if($x%2==0)
			echo $x." is an even number!";
		else
			echo $x." is an odd number";	 
?>
</head>
</html>