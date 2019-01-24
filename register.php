<?php
	$a=$_POST['username'];
	$b=$_POST['email'];
	$c=$_POST['password'];
	$d=$_POST['name'];
	$e=$_POST['bday'];
	$f=$_POST['number'];
	$g=$_POST['altnumber'];
	$h=$_POST['country'];
	$i=$_POST['address'];
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
echo "Connected successfully";

//Putting Data in SQL
$sql = "INSERT INTO `WCS`(`Username`, `Email_Address`, `Password`, `Name`, `DOB`, `Contact_Number`, `Alternate_Contact_Number`, `Country`, `Address`) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
$url = "user_login.html";
header( "Location: $url" );
?>