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
}
$selectMonth = "";
$selectMonth = isset($_POST["selectMonth"]) ? $_POST["selectMonth"] : 'all'; 
$selectWeek = "";
$selectWeek = isset($_POST["selectWeek"]) ? $_POST["selectWeek"] : 'all'; 
#Check if its empty, set it to "all" if it is, make it always display the data.
#Have to do this, as the sql query CANNOT contain "all"
$sql = "SELECT * FROM SALES";
echo ("Selectmonth = " . $selectMonth . "SelectWeek = " . $selectWeek);
if($selectMonth !== "all" && $selectWeek !== "all"){ #Neither are all
	$sql = "SELECT * FROM SALES WHERE month = '$selectMonth' AND week = '$selectWeek'";
}
else if($selectMonth == "all" && $selectWeek !== "all"){ #Month all, not week
	$sql = "SELECT * FROM SALES WHERE week = '$selectWeek'";
}else if($selectMonth !== "all" && $selectWeek == "all"){#Month is not all, week is.
	$sql = "SELECT * FROM SALES WHERE month = '$selectMonth'";
}

$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th>
	<th>Name</th>
	<th>Category</th>
	<th>Price</th>
	<th>Remaining Stock</th>
	<th>Sold</th>
	<th>Month</th></tr>
	<th>Week</th></tr>";
	while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["prodid"]."</td>
		<td>".$row["prodname"]."</td> 
		<td>".$row["category"]."</td> 
		<td>".$row["price"]."</td>
		<td>".$row["qtyremaining"]." </td>
		<td>".$row["qtysold"]." </td>
		<td>".$row["month"]." </td>
		<td>".$row["week"]." </td>
		</tr>";
    }
	echo "</table>";
}

mysqli_close($conn);
?>
</body> 
</html>
