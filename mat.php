<!DOCTYPE html>
<html>
<head>
<title> matrix </title>
<?php
	 $x=array(array(1,2),array(3,4));
	 $y=array(array(5,6),array(7,8));
	 for($a=0;$a<2;$a++)
	 {
	 	for($b=0;$b<2;$b++)
	 	{
	 		echo ($x[$a][$b]+$y[$a][$b])." ";
	 	}
	 	echo "<br>";
	 }
?>
</head>
</html>