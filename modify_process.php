<!DOCTYPE html>
<html lang="en">
<head>
<title>Assignment 3 </title>
<meta charset="utf-8" />
<meta name="description" content="This document allows a user to view, edit and create new entries for the pharmacy products"/>
<meta name="authors" content="Hugh Rutland, Daniel Mastrowicz, Basem Gazzaz, Patrick Carty"/>
<meta http-equiv="refresh" content="0; url=./Proj1.php" />
</head>

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
if(!empty($_POST["prodid"])) {
	$prodid = ($_POST["prodid"]);
	$prodname = ($_POST["prodname"]);
	$category = ($_POST["category"]);
	$price = ($_POST["price"]);
	$qtyremaining = ($_POST["qtyremaining"]);
	$qtysold = ($_POST["qtysold"]);
	$month = ($_POST["month"]);
}
$modify = "UPDATE SALES SET  
prodname = '$prodname',
category = '$category',
price = '$price',
qtyremaining = '$qtyremaining',
qtysold = '$qtysold',
month = '$month'
WHERE prodid = '$prodid'";

$removed = @mysqli_query($conn, $modify);
if(!$removed) {
	echo "<p>Something is wrong with ", $modify, "</p>";
} else {
	echo "<p>Successfully updated entry from with new values</p>";
}
mysqli_close($conn);
?>
</html>