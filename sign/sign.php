<html>

	<head>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">	 <!--Bootstrap link compulsory-->
	<link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Slab" rel="stylesheet"> 
	
	<style>
	body
	{
	background:  peachpuff;
	}

	input[type=text], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;

	}


	input[type=text]:focus {
    border: 2px solid papayawhip;
	}

	label {
	color: #66574a;
	font-weight: bold;
	display: block;
	width: 200px;
	float: left;
	margin: 15px 0;
	}
	label:after { content: ": " }

	div {
    border-radius: 5px;
    background-color:  white;
    padding: 25px;
	height:670px;
	width:50%;
	
	}
	
	h1{
	color:#66574a;
	}
	
	input[type=button]{
	background-color:#a2989f;
	font-size:20px;
	color:white;
	}
	
	input[type=button]:hover {
    background-color:#cbbfc7;
	}

	</style>
	</head>

<body>

<center><h1 style="font-family: 'Roboto Slab', serif;"><b><u>Sign Up for Registration</u></b></h1>
</center><br>


<center>
<div>
	
	<form method="POST" action="process.php" name="signup" id="reset" >
	
    <label for="username"><font size="5px">Username</label>
	<input type="text" id="username" name="username" />
	<br>
	<b>Password:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="password" id="password" name="password" /><br>

	<label for="add">Country</label>
	<input type="text" id="add" name="country" /><br>


	<label for="add1">State</label>
	<input type="text" id="add1" name="state" /><br>

	<label for="add2">City</label>
	<input type="text" id="add2" name="city" /><br>

	<label for="qu">Qualification</label>
	<input type="text" id="qu" name="qua" /><br>
	
	<label for="gen">Gender</label>
	<input type="radio" id="gen" name="gender" value="M"/>Male<br>
	<input type="radio" id="gen" name="gender" value="F"/>Female<br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="radio" id="gen" name="gender" value="O"/>Other<br><br>
	
	
	<input type="submit" name="submit" value="Submit" />
	&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="button" class="btn btn-default" name="valid" value="Validate" Onclick="Validate()"/>
	&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="button"  value="Reset" Onclick="Clear()"/>
	
  </form>
  </div>
  
  
  </center>
      <script>

	function Validate(){
	
	var letter=/^[A-Z a-z]+$/;
	var number=/^[0-9]+$/;
	
	var nam= document.signup.username.value;
	
	if(nam.match(letter))
	{
	//alert("name enter correctly");

	}
	else
	{
	alert("invalid name");
		document.signup.name.focus();

	return false;
	}
	
}


function Clear()
{
	

		document.getElementById("reset").reset();
	
   
}


</script>

</body>
</html>