<?php
	$a=$_POST['weight'];
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

$x=rand(10000,99999);

//Putting Data in SQL
$sql = "INSERT INTO `Courier`(`Username`, `Courier_Weight`) VALUES ('$j','$a')";

	$sql1="UPDATE `Admin_Track` SET `Tracking_ID`='$x' WHERE Tracking_ID=''";
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
$url = "success.php";
header( "Location: $url" );
?>