
<?php
$dbhost="localhost";					/*dbhost=server name*/
$dbname="registration";
$dbpass="";										//db connection
$dbuser="root";

$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if (!$conn) 
{
die("Connection failed: " . mysqli_query($conn));
}
else{
echo "Database connected Successfully";
}
?>

