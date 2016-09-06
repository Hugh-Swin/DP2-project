<?php
session_start();

$servername = "host"
$username = "username"
$pass = "password"
$dbname = "salesDB"

function sanitise_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}	

$conn = mysqli_connect($servername, $username, $pass, $dbname);
if (!$conn) {
	echo "<p>Database connection failure</p>";
}

if(!empty($_POST["remove_id"])) {
	$pname = ($_POST["remove_id"]);
}

$delete = "DELETE FROM Sales WHERE prodname = $pname"

mysqli_close($conn);
?>