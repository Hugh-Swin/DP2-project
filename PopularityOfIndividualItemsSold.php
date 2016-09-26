<HTML> 
<head>

</head>
<body>
<tr><td><a href='Porj1.php'><h2 align="center">HOME</h2></a></td></tr>
<h2 align="center">Popularity Of Individual Items Sold</h2>
<div align="center">
<form>
<table>
<tr><td>Items name : <font color=red>*</font></td><td><input type='' name=''/></td></tr>
<tr><td><input type='submit' value='Search''/></td><td></td></tr>
</table>
</form>
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

mysqli_close($conn);
?>
</HTML>
