<?php
if(isset($_POST["predictGroup"])){
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

$predictGroup = "";
$predictGroup = isset($_POST["predictGroup"]) ? $_POST["predictGroup"] : ''; 
	
	//predicts future qtysold based on average of previous months
	if($predictGroup == "All")
	{
		$sqlstring = "SELECT category, qtysold, ROUND(AVG(qtysold),0) AS 'Group Prediction'
		FROM sales 
		GROUP BY category";
	}
	else
	{
		$sqlstring = "SELECT category, qtysold, ROUND(AVG(qtysold),0) AS 'Group Total Sales'
		FROM sales 
		WHERE category = '$predictGroup'";
	}

	$result = mysqli_query($conn, $sqlstring);

	if ($result->num_rows > 0) 
	{
		echo 
		"<h2> Prediction for $predictGroup</h2>
		<table cellspacing='1'>
		<tr>
		<th>Category</th>
		<th>Future Sales Prediction</th>
		</tr>";
		while($row = $result->fetch_assoc())
		{
			echo 
			"<tr>
				<td>".$row["category"]."</td> 
				<td>".$row["Group Prediction"]." </td>
			</tr>";
		}
		echo "</table>";
	}else{
		echo "<p>Cannot calculate prediction for '$predictGroup'.</p>";
	}
	mysqli_close($conn);
}
?>
