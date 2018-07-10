
<?php
$dbhost="localhost";					/*dbhost=server name*/
$dbname="feedback";
$dbpass="";										//db connection
$dbuser="root";
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if (!$conn) 
{
die("Connection failed: " . mysqli_query($conn));
}
echo "<br>";

$a=$_POST['comments'];

//Execute the query
mysqli_query ($conn,"INSERT INTO ftable (comments)
				VALUES('$a')");

if(mysqli_affected_rows($conn) > 0)
	{
	echo "<p>Done! Thank you:)</p>";
	echo "<a href='feedback.php'>Go Back</a>";
	} 
else 
	{
	echo "Error! Try Again<br />";
	echo mysqli_error ($conn);
	}

?>