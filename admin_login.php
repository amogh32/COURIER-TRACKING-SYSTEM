<?php
   
   $link = mysqli_connect("localhost", "root", "", "WCS");
   /* check connection */
   if (mysqli_connect_errno()) {
      printf("Connect failed: %s\n", mysqli_connect_error());
      exit();
   }

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myadminname = $_POST['adminname'];
      $mypassword = $_POST['password'];
      //echo('Username is '.$myusername);
      //echo('Password is '.$mypassword);
       
      
      $sql = "SELECT * FROM `Admin` WHERE Admin_Name = '$myadminname' and Admin_Password = '$mypassword'";

      /* Select queries return a resultset */
      if ($result = mysqli_query($link, "$sql")) {
      	printf("Select returned %d rows.\n", mysqli_num_rows($result));
      if(mysqli_num_rows($result) == 1){
      	$sql = "INSERT INTO `WCS2`(`Admin_Name`) VALUES ('$myadminname')";
      	if ($link->query($sql) === TRUE) {
    		echo "New record created successfully";
		} 		
		else {
    		echo "Error: ".$sql."<br>".$link->error;
		}

		$link->close();
		$url = "admin_page.php";
		header( "Location: $url" );
      }
      else{
      	$link->close();
		$url = "admin_login.html";
		header( "Location: $url" );
      }
      mysqli_free_result($result);
      }
   }
?>