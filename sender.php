<?php
	$a=$_POST['name'];
	$b=$_POST['number'];
	$c=$_POST['altnumber'];
	$d=$_POST['email'];
	$e=$_POST['address'];
	$f=$_POST['city'];
	$g=$_POST['state'];
	$h=$_POST['country'];
	$i=$_POST['pincode'];
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

$result=mysqli_query($conn,"SELECT * FROM WCS1");
while($row = mysqli_fetch_array( $result ) )
{
	echo "<br>";//HTML tag
	
$j = $row ['Username'] . $row [1];
}
//Putting Data in SQL
$sql = "INSERT INTO `Sender`(`Username`, `Name`, `Mobile Number`, `Alternate_Mobile_Number`, `E-mail_Address`, `Address`, `City`, `State`, `Country`, `Pin_Code`) VALUES ('$j','$a','$b','$c','$d','$e','$f','$g','$h','$i')";


$sql1="INSERT INTO `Admin_Track`(`Username`, `Tracking_ID`, `Present_Location`, `Destination`) VALUES ('$j','','$f','')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
if ($conn->query($sql1) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
}
$conn->close();
$url = "deliverto.html";
header( "Location: $url" );
?>