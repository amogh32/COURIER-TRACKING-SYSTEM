<!DOCTYPE html>
<html>
<head>
<title> week </title>
<?php
	$x=array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday");
	$y=count($x);
	for($z=1;$z<=$y;$z++)
		echo $z.". ".$x[$z-1]."<br>";
?>
</head>
</html>