<?php
   
   $link = mysqli_connect("localhost", "root", "", "WCS");
   /* check connection */
   if (mysqli_connect_errno()) {
      printf("Connect failed: %s\n", mysqli_connect_error());
      exit();
   }
   $sql ="DELETE FROM `WCS1` WHERE 1";
   if ($link->query($sql) === TRUE) {
         echo "New record created successfully";
      }     
      else {
         echo "Error: ".$sql."<br>".$link->error;
      }
   $sql1 ="DELETE FROM `WCS2` WHERE 1";
   if ($link->query($sql1) === TRUE) {
         echo "New record created successfully";
      }     
      else {
         echo "Error: ".$sql1."<br>".$link->error;
      }  
		$link->close();
		header("Location: M.php");
?>