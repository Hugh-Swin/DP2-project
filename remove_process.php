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

if(!empty($_POST["remove_id"])) {
	$pid = ($_POST["remove_id"]);
}

$delete = "DELETE FROM Sales WHERE prodid = '$pid'";

$removed = @mysqli_query($conn, $delete);

if(!$removed) {
	echo "<p>Something is wrong with ", $delete, "</p>";
} else {
	echo "<p>Successfully removed entry from table</p>";
}

mysqli_close($conn);
?>