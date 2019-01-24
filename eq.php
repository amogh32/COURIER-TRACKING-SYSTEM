<!DOCTYPE html>
<html>
<head>
<title> eq </title>
<?php
		$x=$_POST['no1'];
		$y=$_POST['no2'];
		if($x!=$y)
			echo "The greater among the two is ".($x>$y?$x:$y);
		else
			echo "They both are equal";
?>
</head>
</html>