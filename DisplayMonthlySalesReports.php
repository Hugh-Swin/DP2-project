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

$conn = @mysqli_connect($server, $user, $pass, $dbname);
if (!$conn) {
	echo "<p>Database connection failure</p>";
	
$connect = mysqli_select_db($conn, $dbname)
or die('Database not available');
if (!$connect){
die("<p>The database server is not available.</p>" .mysqli_error());
}
echo "<p>Successfully connected to the database server.</p>";

// set up the SQL query string - we will retrieve the whole
// record that matches the name


$SQLstring = "select * from sales";
$queryResult = @mysqli_query($conn, $SQLstring)
		Or die ("<p>Unable to query the sales table.</p>"."<p>Error code ". mysqli_errno($conn). ": ".mysqli_error($conn)). "</p>";
		prodname, category, price, qtyremaining, qtysold
echo "<table width='100%' border='1'>";
echo "<th>prodname</th><th>category</th><th>Price</th><th>qtyremaining</th><th>qtysold</th>";
	$row = mysqli_fetch_row($queryResult);
	
	while ($row) {
		echo "<tr><td>{$row[1]}</td>";
		echo "<td>{$row[2]}</td>";
		echo "<td>{$row[3]}</td>";
		echo "<td>{$row[4]}</td>";
		echo "<td>{$row[5]}</td></tr>";
		$row = mysqli_fetch_row($queryResult);
	}
	echo "</table>";


	mysqli_close($conn);

?>
</body> 
</html>
