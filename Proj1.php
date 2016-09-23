<!DOCTYPE html>
<html lang="en">
<title>Assignment 3 - 9989951</title>
<head>
<meta charset="utf-8" />
<meta name="description" content="This document allows a user to view, edit and create new entries for the pharmacy products"/>
<meta name="authors" content="Hugh Rutland, Daniel Mastrowicz, Basem Gazzaz, Patrick Carty"/>
</head>
<body>
<h2>People Health Pharmacy (PHP) Inc.</h2>
<h3>Sales Reporting and Prediction System</h3>
<a href="./reset_database.php">Reset the Database (Drops table, then readds with default data)</a> 
<form id="remove" method="post" novalidate="novalidate" action="remove_process.php">
	<fieldset>
		<h4>Write the id number of the product you would like to delete the entry for in the text box below:</h4>
		<input type="text" name="remove_id" id="remove_id" />
		<p><input type="submit" id="submit" value="Submit"/><p>
	</fieldset>
</form>
<!-- Display sales table here -->

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

$sql = "SELECT * FROM SALES";
$result = mysqli_query($conn, $sql);


if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th>
	<th>Category</th><th>Price</th>
	<th>Stock</th><th>Sold</th>
	<th>Month</th>
	</tr>";
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


<form id="modify" method="post" novalidate="novalidate" action="modify_process.php">
	<fieldset>
		<h4>Write the value of the product id, then change the other values as needed.</h4>
		Product Id:<input type="text" name="prodid" id="prodid/"/>
		Product Name:<input type="text" name="prodname" id="prodname"/>
		Category:<input type="text" name="category" id="category"/>
		Price:<input type="text" name="price" id="price" rows="1"/>
		Quantity:<input type="text" name="qtyremaining" id="qtyremaining"/>
		Amount Sold:<input type="text" name="qtysold" id="qtysold"/>
		Month:<input type="text" name="month" id="month"/>
		<p><input type="submit" id="submit" value="Submit"/><p>
	</fieldset>
</form>
</body>
</html>
