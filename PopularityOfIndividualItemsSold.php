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

$sqlstring = "SELECT * FROM Sales";
$queryResult = @mysqli_query($conn, $sqlstring)
		Or die ("<p>Unable to query the SALES table.</p>"."<p>Error code ". mysqli_errno($conn). ": ".mysqli_error($conn)). "</p>";

echo "<form>Please select a item Sold: <select name='item'><option>All</option>";
	
$row = mysqli_fetch_row($queryResult);
	
	while ($row) {
		echo "<option value='".$row[1]."'>".$row[1]."</option>";	
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
		$sqlstring = "select * from SALES where prodname ='".$_GET['item']."'";
	}
	
	$result = mysqli_query($conn, $sqlstring);

	if ($result->num_rows > 0) 
	{
		echo 
		"<table cellspacing='1'>
		<tr>
		<th>Name</th>
		<th>Category</th>
		<th>Price</th>
		<th>Remaining Stock</th>
		<th>Item Sold</th>
		</tr>";
		while($row = $result->fetch_assoc())
		{
			echo 
			"<tr>
				<td>".$row["prodname"]."</td> 
				<td>".$row["category"]."</td> 
				<td>".$row["price"]."</td>
				<td>".$row["qtyremaining"]." </td>
				<td>".$row["qtysold"]." </td>
			</tr>";
		}
		echo "</table>";
	}
	mysqli_close($conn);
}
?>
</body>
</html>
