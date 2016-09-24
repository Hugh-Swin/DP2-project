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
$selectOption = "";
$selectOption = isset($_POST["selectMonth"]) ? $_POST["selectMonth"] : 'all'; 
#Check if its empty, set it to "all" if it is, make it always display the data.
if($selectOption != "all"){
	$sql = "SELECT * FROM SALES WHERE month = '$selectOption'";
}else{
	$sql = "SELECT * FROM SALES";
}
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th>
	<th>Name</th>
	<th>Category</th>
	<th>Price</th>
	<th>Remaining Stock</th>
	<th>Sold</th>
	<th>Month</th></tr>";
	while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["prodid"]."</td>
		<td>".$row["prodname"]."</td> 
		<td>".$row["category"]."</td> 
		<td>".$row["price"]."</td>
		<td>".$row["qtyremaining"]." </td>
		<td>".$row["qtysold"]." </td>
		<td>".$row["month"]." </td>
		</tr>";
    }
	echo "</table>";
}

mysqli_close($conn);
?>
</body> 
</html>
