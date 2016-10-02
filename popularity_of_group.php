<?php
if(isset($_POST["popularGroup"])){
@session_start();
$server = "127.0.0.1";
$user = "root";
$pass = "pass";
$dbname = "salesdb";
$conn = mysqli_connect($server, $user, $pass, $dbname);
if (!$conn)
{
	echo "<p>Database connection failure</p>";
}

$popularGroup = "";
$popularGroup = isset($_POST["popularGroup"]) ? $_POST["popularGroup"] : ''; 
		
	if($popularGroup == "All")
	{
		$sqlstring = "SELECT category, qtysold, SUM(qtysold) AS 'Group Total Sales'
		FROM sales 
		GROUP BY category
		ORDER BY 3 DESC";
	}
	else
	{
		$sqlstring = "SELECT category, qtysold, SUM(qtysold) AS 'Group Total Sales'
		FROM sales 
		WHERE category = '$popularGroup'";
	}

	$result = mysqli_query($conn, $sqlstring);

	if ($result->num_rows > 0) 
	{
		echo 
		"<h2> Popularity of $popularGroup</h2>
		<table cellspacing='1'>
		<tr>
		<th>Category</th>
		<th>Total Sold</th>
		</tr>";
		while($row = $result->fetch_assoc())
		{
			echo 
			"<tr>
				<td>".$row["category"]."</td> 
				<td>".$row["Group Total Sales"]." </td>
			</tr>";
		}
		echo "</table>";
	}else{
		echo "<p>Cannot calculate popularity for '$popularGroup'.</p>";
	}
	mysqli_close($conn);
}
?>
