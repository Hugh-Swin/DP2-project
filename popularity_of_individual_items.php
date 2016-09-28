<?php
if(isset($_POST["popularItem"])){
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

// set up the SQL query string - we will retrieve the whole
// record that matches the name
$popularItem = "";
$popularItem = isset($_POST["popularItem"]) ? $_POST["popularItem"] : ''; 
	$conn = mysqli_connect($server, $user, $pass, $dbname)
	or die ("<p>Failed to connect to server.</p>". "<p>Error code ". mysqli_connect_errno().": ". mysqli_connect_error()). "</p>";
	
	if($popularItem == "All")
	{
		$sqlstring = "SELECT prodname,qtysold
		FROM SALES 
		ORDER BY qtysold DESC";
	}
	else
	{
		$sqlstring = "SELECT prodname,qtysold
		FROM SALES 
		WHERE PRODNAME = '$popularItem'";
	}
	
	$result = mysqli_query($conn, $sqlstring);

	if ($result->num_rows > 0) 
	{
		echo 
		"<h2> Popularity of $popularItem</h2>
		<table cellspacing='1'>
		<tr>
		<th>Name</th>
		<th>Item Sold</th>
		</tr>";
		while($row = $result->fetch_assoc())
		{
			echo 
			"<tr>
				<td>".$row["prodname"]."</td> 
				<td>".$row["qtysold"]." </td>
			</tr>";
		}
		echo "</table>";
	}else{
		echo "<h2>Cannot find the popularity of '$popularItem'.</h2>";
	}
	mysqli_close($conn);
}
?>
