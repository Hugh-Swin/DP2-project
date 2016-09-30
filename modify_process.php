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
	$week = ($_POST["week"]);
}
$modify = "UPDATE SALES SET  
prodname = '$prodname',
category = '$category',
price = '$price',
qtyremaining = '$qtyremaining',
qtysold = '$qtysold',
month = '$month',
week = '$week'
WHERE prodid = '$prodid'";

$removed = @mysqli_query($conn, $modify);
if(!$removed) {
	echo "<p>Something is wrong with ", $modify, "</p>";
} else {
	echo "<p>Successfully updated entry from with new values</p>";
}
mysqli_close($conn);
?>