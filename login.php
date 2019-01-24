<?php
   
   $link = mysqli_connect("localhost", "root", "", "WCS");
   /* check connection */
   if (mysqli_connect_errno()) {
      printf("Connect failed: %s\n", mysqli_connect_error());
      exit();
   }

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = $_POST['username'];
      $mypassword = $_POST['password'];
      //echo('Username is '.$myusername);
      //echo('Password is '.$mypassword);
       
      
      $sql = "SELECT * FROM `WCS` WHERE Username = '$myusername' and Password = '$mypassword'";

      /* Select queries return a resultset */
      if ($result = mysqli_query($link, "$sql")) {
      	printf("Select returned %d rows.\n", mysqli_num_rows($result));
      if(mysqli_num_rows($result) == 1){
      	$sql = "INSERT INTO `WCS1`(`Username`) VALUES ('$myusername')";
      	if ($link->query($sql) === TRUE) {
    		echo "New record created successfully";
		} 		
		else {
    		echo "Error: ".$sql."<br>".$link->error;
		}	

		$link->close();
		header("Location: M.php");
      }
      else{
      	$link->close();
		$url = "user_login.html";
		header( "Location: $url" );
      }
      mysqli_free_result($result);
      }
   }
?>