
<html>  
<head>  
<title>Login</title>  
    <style>   
        body{  
              
    margin-top: 100px;  
    margin-bottom: 100px;  
    margin-right: 150px;  
    margin-left: 80px;  
    background-color: azure ;  
    color: palevioletred;  
    font-family: verdana;  
    font-size: 100%  
      
        }  
            h1 {  
    color: green;  
    font-family: verdana;  
    font-size: 100%;  
}  
        h3 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 100%;  
} </style>  
</head>  
<body>  
    <h1><u>LOGIN PAGE</u></h1> 
   <p><a href="sign.php">Register</a></p>  
<h3>Login Form</h3>  
<form action="" method="POST">  
Username: <input type="text" name="username"><br />  
Password: &nbsp;<input type="password" name="password"><br />   
<input type="submit" value="Login" name="submit" />  
</form>  

</body>  
</html>  

<?php  

if(isset($_POST["submit"])){  
  
if(!empty($_POST['username']) && !empty($_POST['password'])) { 

$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'registration');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
else
	echo "Successful db";

if (isset($_POST['username']) and isset($_POST['password'])){

//3.1.1 Assigning posted values to variables.
$username = $_POST['username'];
$password = $_POST['password'];

//3.1.2 Checking the values are existing in the database or not
$query = "SELECT * FROM signup WHERE username='$username' AND password='$password'";

 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1){
$_SESSION['username'] = $username;
echo "<br>";
echo "Successful Logged In:-)";
echo "<br>";
echo '<a href="trees.html">proceed to tree plantation page</a>';
echo "<br>";
echo '<a href="disease.html">proceed to disease page</a>';
echo "<br>";
echo '<a href="pollution.html">proceed to pollution page</a>';
}
 
else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.

echo "<br>";
echo "Invalid Login Credentials.. PLEASE TRY AGAIN";
}
}
}
else
		echo "*All fields are mandatory";
}


?>  
 