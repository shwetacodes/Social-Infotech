<?php
print_r($_POST);		/* $_POST associative array of variables used to collect form data */
?>

<?php 
include 'database.php';

// create a variable

$a=$_POST['username']; //(a,b,c,d,e,f,g) random variables just used to store info
$b=$_POST['password'];
$c=$_POST['country'];
$d=$_POST['state'];
$e=$_POST['city'];
$f=$_POST['qua'];
$g=$_POST['gender'];


//Execute the query

mysqli_query ($conn,"INSERT INTO signup (username,password,country,state,city,quali,gender)
				VALUES('$a','$b','$c','$d','$e','$f','$g')");

if(mysqli_affected_rows($conn) > 0)
	{
	echo "<p>Successfully Registered </p>";
	echo "<a href='sign.php'>Go Back</a>";
	} 
else 
	{
	echo "NOT Registered<br />";
	echo mysqli_error ($conn);
	}

?>
