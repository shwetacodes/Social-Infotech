
<html>
<head>
	<title>LOGIN PAGE</title>
	<style type="text/css">
	.c1
	{
      background-color: white;
      margin-bottom: 300px;
      margin-top: 150px;
      margin-right: 300px;
      margin-left: 350px;
     width:600px;
      height: 350px; 
	}
	.c2
	
	{
          background-color: green;
          padding-top: 5px;
          padding-bottom: 5px;
	}
	.c3
	{
		
		margin-left: 0px;
		margin-right: 0px;
		width: 100%;
		height: 25px;
		border-radius: 5px;
		border-color: green;
	}
	.c4
	{
		
		background-color: green;
	    margin-left: 190px;
	    width: 240px;
	    margin-top: 5px;
	    padding-top: 5px;
	    padding-bottom: 5px;
	    font-size: 20px;
	    border-radius: 5px;
	    border-color: green;
	}
	.inside
	{
		margin-left: 190px;
		margin-top: 65px;
		height: 140px;
		width: 240px;
      }
      .space
      {
      	padding-top: 25px;
      }	
	
	</style>
</head>

<body bgcolor="grey">

<form action="" method="POST">  
   <div class="c1">
   <h2 class="c2"><center>LOGIN PAGE</center></h2>
    <div class="inside">
    
   <label><font size="5px">Username</font></label><br>
   <input type="text" name="username" class="c3" placeholder="enter Username">

<label><font size="5px">Password</font></label><br>
   <input type="password" name="password" class="c3" placeholder="enter password"><br>
   </div>
   <input type="submit" name="submit" value="Log in" class="c4">
   </div>
</form>

</body>
</html>

<?php

if(isset($_POST["submit"])){  
  
if(!empty($_POST['username']) && !empty($_POST['password'])) {  
include 'database.php'; //make connection

  // Check if username and password are correct
if ($_POST["username"] == 'username' && $_POST["password"] == 'password') {

// If correct, we set the session to YES
  session_start();
  $_SESSION["Login"] = "YES";
  echo "You are now logged in.</br></br>";
  echo "<a href='trees.html'>Proceed...</a>";

}
else {

// If not correct, we set the session to NO
  session_start();
  $_SESSION["Login"] = "NO";
  echo "Incorrect username and / or password.</br></br>";
  echo "<a href='login.php'>Return to login</a>";

} 
}
else
		echo "*All fields are mandatory";
	
}

?>


