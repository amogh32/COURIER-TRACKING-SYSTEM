<!DOCTYPE html>
<html>
<head>
<title> Tracking ID </title>
</head>
<body>
<img src="wcs.jpg" height="125" width="300" style="float: left;">
<br>
<br>
<h3 style="text-align: right; color: green; font-size: 25px;" id="hello"> 

<?php
   $link = mysqli_connect("localhost", "root", "", "WCS");
   /* check connection */
   if (mysqli_connect_errno()) {
      printf("Connect failed: %s\n", mysqli_connect_error());
      exit();
   }
   $sql = "SELECT * FROM `WCS2` WHERE 1";
   /* Select queries return a resultset */
    if ($result = mysqli_query($link, "$sql")) {
    //if(mysqli_num_rows($result) == 1){
    //echo "Hello User";
    while($row = mysqli_fetch_array( $result ) )
    {
      echo "Hello ".$row['Admin_Name'];
    }
    $link->close();
    mysqli_free_result($result);
    }
?>
</h3>
<form action="update.php" target="_top" method="POST" style="clear: left;">
<fieldset>
<legend> <h1>Admin</h1> </legend>
<font size="5">Tracking ID</font> <font color="red">*</font> <br>
<input type="text" name="trackid" style="height: 25px; width: 50%;" required> <br>
Enter Tracking ID.
<br> <br>
<font size="5">Present Location</font> <font color="red">*</font> <br>
<input type="text" name="location" style="height: 25px; width: 50%;" required> <br>
Enter Present Location.
<br> <br>
<input type="submit" value="Update" style="background-color: #3090C7; color: white; height: 35px;  padding: 5px 10px 5px 10px; border: none; font-size: 20px;">
</fieldset>	
</form>
</body>
</html>