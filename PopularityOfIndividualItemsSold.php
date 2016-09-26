<!DOCTYPE html>
<head> 
<title></title> 
</head> 

<body>
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

// set up the SQL query string - we will retrieve the whole
// record that matches the name

$sqlstring = "SELECT * FROM SALES";
$queryResult = @mysqli_query($conn, $sqlstring)
		Or die ("<p>Unable to query the SALES table.</p>"."<p>Error code ". mysqli_errno($conn). ": ".mysqli_error($conn)). "</p>";

echo "<form>Please select a iten Sold: <select name='item'><option>All</option>";
	
$row = mysqli_fetch_row($queryResult);
	
	while ($row) {
		echo "<option value='".$row[0]."'>".$row[0]."</option>";	
		$row = mysqli_fetch_row($queryResult);
	}

echo "</select><br/><input type='submit' value='Search'/></form>";

mysqli_close($conn);

if(isset($_GET['item']) && $_GET['item']!="")
{
	$conn = @mysqli_connect($server, $user, $pass, $dbname)
	or die ("<p>Failed to connect to server.</p>". "<p>Error code ". mysqli_connect_errno().": ". mysqli_connect_error()). "</p>";
	
	if($_GET['item']=="All")
	{
		$sqlstring = "select * from SALES";
	}
	else
	{
		$sqlstring = "select * from SALES where make='".$_GET['item']."'";
	}
	
	$queryResult = @mysqli_connect($server, $user, $pass, $dbname);
	
	echo "<hr>";

	echo "<table width='100%' border='1'>";
	echo "<th>prodname</th><th>price</th><th>qtyremaining</th><th>qtysold</th>";
		$row = mysqli_fetch_row($queryResult);
		
		while ($row) {
			echo "<tr><td>{$row[1]}</td>";
			echo "<td>{$row[2]}</td>";
			echo "<td>{$row[3]}</td>";
			echo "<td>{$row[4]}</td></tr>";
			$row = mysqli_fetch_row($queryResult);
		}
	echo "</table>";
	mysqli_close($conn);
}
?>
</body>
</html>

