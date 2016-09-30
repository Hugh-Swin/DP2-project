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
	$prodname = ($_POST["prodname"]);
	$category = ($_POST["category"]);
	$price = ($_POST["price"]);
	$qtyremaining = ($_POST["qtyremaining"]);
	$qtysold = ($_POST["qtysold"]);
	$month = ($_POST["month"]);
	$week = ($_POST["week"]);

$modify = "INSERT INTO SALES(prodname,category,price,qtyremaining,
qtysold,month,week)
VALUES('$prodname','$category','$price','$qtyremaining','$qtysold',
'$month','$week')";

$insert = @mysqli_query($conn, $modify);
if(!$insert) {
	echo "<p>Something is wrong with ", $modify, "</p>";
} else {
	echo "<p>Successfully updated entry from with new values</p>";
}
mysqli_close($conn);
?>