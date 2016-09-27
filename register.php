<HTML> 
<head>
  <title></title>
</head>
<h1 align="center">Registration Page</h1>

<tr><td><a href='Proj1.php'><h2 align="center">HOME</h2></a></td></tr>
<h3 align="center">Please fill the fields below to complete your registration:</h3>
<div align="center">
<form>
<table>
<tr><td>Email Address:<font color=red>*</font></td><td><input type='email' name='email_address'/></td></tr>
<tr><td>Password:<font color=red>*</font></td><td><input type='password' name='password'/></td></tr>
<tr><td><input type='submit' name='submit' id='submit' value='Register'/></td><td></td></tr>
</table>
</form>
<p><h3> Already registered?<a href='ImplementLoginSystem.php'>Login Here</a></h3></p>
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

// check if user enter all feiled already exists in the database.
if(isset($_GET['email_address']) 
&& isset($_GET['password']))
{
		$email = $_GET['email_address'];
		$pass = $_GET['password'];
				
		// check Password are provided.
		if ($pass == '')
		{
			echo '<p>Please enter the Password.</p>';
		}
		// check email address are provided.
		else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			echo '<p>Please enter a valid email address format.</p>';
		}

		//chrck the email addrees uniquel
		// check if user enter Email Address already exists in the database.
		else if	($sql ="SELECT * FROM admin WHERE email ='$email_address'");
		$queryResult = @mysqli_query($conn, $sql)
		Or die ("<p>Unable to check data from the admin table.</p>"."<p>Error all feiled requaer". mysqli_errno($DBConnect). ": ".mysqli_error($DBConnect)). "</p>";
			if (mysqli_num_rows($queryResult)>0)
			{
				echo '<p>admin email address you enter already exists!</p>';
			}
			$sqlLesting = "INSERT INTO admin (
				email,
				password) 
				values (
				'".$_GET['email_address']."'
				,'".$_GET['password']."');";
		
		$queryResult = @mysqli_query($conn, $sqlLesting)
		Or die ("<p>Unable to insert data into the admin table.</p>"."<p>Error all feiled requaer". mysqli_errno($DBConnect). ": ".mysqli_error($DBConnect)). "</p>";
	
		setcookie("email_address", $email);	
		
		// if registeratio sseuccful go to booking page.
		header("Location:Proj1.php");		
}
mysqli_close($conn);
?>
</HTML>
