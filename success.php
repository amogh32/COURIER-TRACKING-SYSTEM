<html>
<head>
<title> Success </title>
</head>
<body bgcolor="yellow">
<h1> Your Pickup Request Has Been Recorded </h1> <br> <br>
<h2> Your Tracking ID Is </h2> <br>
<p id="trackid">

<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "WCS";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	}
	//echo "Connected successfully";
	$result=mysqli_query($conn,"SELECT * FROM Admin_Track");
	while($row = mysqli_fetch_array( $result ) )
	{
		$x = $row ['Tracking_ID'];
	}
	echo $x;
	$conn->close();

?>

 </p>
</body>
</html>