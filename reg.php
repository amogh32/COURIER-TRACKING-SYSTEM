<?php
   
   $link = mysqli_connect("localhost", "root", "", "WCS");
   /* check connection */
   if (mysqli_connect_errno()) {
      printf("Connect failed: %s\n", mysqli_connect_error());
      exit();
   }
   $sql = "SELECT * FROM `WCS1` WHERE 1";
   /* Select queries return a resultset */
      if ($result = mysqli_query($link, "$sql")) {
      if(mysqli_num_rows($result) == 1){
      	if ($link->query($sql) === TRUE) {
    		echo "New record created successfully";
		} 		
		else {
    		echo "Error: ".$sql."<br>".$link->error;
		}
		$link->close();
      $url = "homepage.html";
      header( "Location: $url" );
      }
      else{
      	$link->close();
		$url = "register.html";
		header( "Location: $url" );
      }
      mysqli_free_result($result);
      }
?>