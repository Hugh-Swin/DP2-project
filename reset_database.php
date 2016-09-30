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
$reset = "DROP TABLE SALES";

if (mysqli_query($conn, $reset)) {
	echo "<p>Table 'Sales' removed succesfully</p>";
} else {
	echo "<p>Error removing table 'Sales'</p>";
}

require_once ("database_setup.php");

mysqli_close($conn);
?>