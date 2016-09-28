<HTML> 
<head>

</head>
<tr><td><a href='Porj1.php'><h2 align="center">HOME</h2></a></td></tr>
<h2 align="center">Enter your Emaail address and Password:</h2>
<div align="center">
<form>
<table>
<tr><td>Email : <font color=red>*</font></td><td><input type='email' name='email_address'/></td></tr>
<tr><td>Password : <font color=red>*</font></td><td><input type='Password' name='password'/></td></tr>
<tr><td><input type='submit' value='Log-In'/></td><td></td></tr>
</table>
</form>
<p><h2>New user? <a href='register.php'>Register Here</a></h2></p>
</div>
</body> 

<?php
session_start();
$server = "127.0.0.1";
$user = "root";
$pass = "pass";
$dbname = "salesdb";
$conn = mysqli_connect($server, $user, $pass, $dbname);
if (!$conn) 
{
	echo "<p>Database connection failure</p>";
}
// check if user enter all feiled.

if (isset($_GET['email_address'])
&& isset($_GET['password']))
{
	$email = strip_tags($_GET["email_address"]);
	$pass = strip_tags($_GET["password"]);
	
	//check if user not enter admin email or password.
	if ($email or $pass =='')
	{
		echo '<p> Please Enter admin Email and Password</p>';
	}
	
	//check admin number and password in the database.
	$SQLstring = ("SELECT * FROM admin WHERE email_address = '$email' AND password = '$pass'");
	$result = mysqli_query($conn,$SQLstring);
	$count= @mysqli_num_rows($result);	
	
	$queryResult = @mysqli_query($conn, $SQLstring)
		Or die ("<p>Unable query frome admin table.</p>"."<p>Error code ".
		mysqli_errno($conn). ": ".mysqli_error($conn)). "</p>";
	if ($count == 1)
	{
		setcookie("email_address", $email);	
		header("Location:booking.php");
	}
	else
	{
		echo'incorrect Email Address OR Password';
	}
}
mysqli_close($conn);
?>
</HTML>
