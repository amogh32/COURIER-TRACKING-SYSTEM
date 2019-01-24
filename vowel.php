<!DOCTYPE html>
<html>
<head>
<title> vowel </title>
</head>
<?php
	$char=$_POST['ch'];
	switch($char)
	{
		case 'a':			echo $char." is a vowel";
							break;
		case 'A':			echo $char." is a vowel";
							break;
		case 'e':			echo $char." is a vowel";
							break;
		case 'E':			echo $char." is a vowel";
							break;
		case 'i':			echo $char." is a vowel";
							break;
		case 'I':			echo $char." is a vowel";
							break;
		case 'o':			echo $char." is a vowel";
							break;
		case 'O':			echo $char." is a vowel";
							break;
		case 'u':			echo $char." is a vowel";
							break;
		case 'U':			echo $char." is a vowel";
							break;
		default:			echo $char." is a consonant";
							break;
	}
?>
</html>