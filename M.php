<html>
<head> 
<script>
 function hello(){
  var str1 = document.getElementById("hello").innerHTML.toString().trim();
  //var str1 = x.toString().trim();
  //var str2 = "Hello";
  if(str1 != ""){
    document.getElementById("logout").style.visibility="visible";
    document.getElementById("login").style.visibility="hidden";
  }
  else{
    document.getElementById("login").style.visibility="visible";
    document.getElementById("logout").style.visibility="hidden";
  }
 } 
</script>
<title> homepage </title>
<style>
ul {
    list-style-type: none;
    padding: 0;
    overflow: hidden;
    background-color: white;
}

li {
    float: right;
}

li a {
    display: block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #3090C7;
    color: white;
}
li a, .dropbtn {
    display: inline-block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: #3090C7;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: white;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: green; color: white;}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>
<body>
	<img src="wcs.jpg" height="125" width="300" style="float: left;">
<ul>
  <li id="logout" style="margin-right: 100px;"><a href="logout.php" target="_top">LOGOUT</a></li>
  <li id="login" class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">LOGIN</a>
    <div class="dropdown-content">
      <a href="user_login.html" target="homepage">USER LOGIN</a>
      <a href="admin_login.html" target="_top">ADMIN LOGIN</a>
    </div>
  </li>
  <li><a href="contactus.html" target="homepage">CONTACT US</a></li>
  <li><a href="reg.php" target="homepage">REGISTER</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">COURIER</a>
    <div class="dropdown-content">
      <a href="pickup.php" target="homepage">CREATE PICKUP REQUEST</a>
      <a href="track.php" target="homepage">TRACK COURIER</a>
    </div>
  </li>
  <li><a href="aboutus.html" target="homepage">ABOUT US</a></li>
  <li><a class="active" href="homepage.html" target="homepage">HOME</a></li>
</ul>
<h3 style="text-align: right; color: green; font-size: 25px;" id="hello"> 

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
    //if(mysqli_num_rows($result) == 1){
    //echo "Hello User";
    while($row = mysqli_fetch_array( $result ) )
    {
      echo "Hello ".$row['Username'];
    }
    $link->close();
    mysqli_free_result($result);
    }
?>
</h3>
<iframe width="100%" onload="hello()" height="650px" src="homepage.html" name="homepage" style="border: none;" > </iframe>
</body>
</html>