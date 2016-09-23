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
$reset = "DROP TABLE SALES";

if (mysqli_query($conn, $reset)) {
	echo "<p>Table 'Sales' removed succesfully</p>";
} else {
	echo "<p>Error removing table 'Sales'</p>";
}

require_once ("database_setup.php");

mysqli_close($conn);
?>
</html>