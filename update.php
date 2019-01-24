<?php
   
   $link = mysqli_connect("localhost", "root", "", "WCS");
   /* check connection */
   if (mysqli_connect_errno()) {
      printf("Connect failed: %s\n", mysqli_connect_error());
      exit();
   }

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $id = $_POST['trackid'];
      $loc = $_POST['location'];
      //echo('Username is '.$myusername);
      //echo('Password is '.$mypassword);
       
      
      $sql = "SELECT * FROM `Admin_Track` WHERE Tracking_ID = '$id'";

      /* Select queries return a resultset */
      if ($result = mysqli_query($link, "$sql")) {
      	printf("Select returned %d rows.\n", mysqli_num_rows($result));
      if(mysqli_num_rows($result) == 1){
         $sql = "UPDATE `Admin_Track` SET `Present_Location`='$loc' WHERE Tracking_ID='$id'";
      	if ($link->query($sql) === TRUE) {
    		echo "Record updated successfully";
		} 		
		else {
    		echo "Error: ".$sql."<br>".$link->error;
		}	

		$link->close();
		$url = "logout.php";
		header( "Location: $url" );
      }
      else{
      	$link->close();
		$url = "admin_page.html";
		header( "Location: $url" );
      }
      mysqli_free_result($result);
      }
   }
?>