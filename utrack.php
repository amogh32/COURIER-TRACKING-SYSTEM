<html>
<head>
</head>
<body bgcolor="Yellow">
<h1>
<?php
$x = $_POST['code'];
$y = $_POST['code'];
//Connect Database
$con=mysqli_connect("localhost","root","")or
    die("Could not connect: " . mysql_error());
	
//Select Database
mysqli_select_db($con,"WCS")or
    die("Could not select db: " . mysql_error());

$result=mysqli_query($con,"SELECT * FROM Admin_Track WHERE TRACKING_ID='$y'");
if(mysqli_num_rows($result) == 0)
	echo "Invalid Tracking ID";
while($row = mysqli_fetch_array( $result ) )
{
	echo "<br>";//HTML tag
	if($row['Present_Location']==$row['Destination'])
		echo "Your Package Has Been Successfully Delivered.<br>Thank You For Using Our Service.";
	else	
		echo "Your Present Location Is ".$row ['Present_Location'];
}
$con->close();
?>
</h1>
</body>
</html>
