<!DOCTYPE html>
<head> 
<title>Display Monthly Sales Reports</title> 
</head> 

<body>
<?php
session_start();
$server = "127.0.0.1";
$user = "root";
$pass = "pass";
$dbname = "salesdb";

$conn = mysqli_connect($server, $user, $pass, $dbname);
if (!$conn) {
	echo "<p>Database connection failure</p>";
	
$connect = mysqli_select_db($conn, $dbname)
or die('Database not available');
if (!$connect){
die("<p>The database server is not available.</p>" .mysqli_error());
}
echo "<p>Successfully connected to the database server.</p>";


	
	
	
?>
</body> 
</html>
