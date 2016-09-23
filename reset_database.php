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

$sales = "CREATE TABLE Sales (
	prodid INT(5) AUTO_INCREMENT PRIMARY KEY,
	prodname VARCHAR(20),
	category VARCHAR(20),
	price INT(6),
	qtyremaining INT(10),
	qtysold INT(10),
	month VARCHAR(3)
	)";
	
if (mysqli_query($conn, $sales)) {
	echo "<p>Table 'Sales' created succesfully</p>";
} else {
	echo "<p>Error creating table 'Sales'</p>";
}
//table of all products
//add week data for sprint2
$data = "INSERT INTO Sales (prodname, category, price, qtyremaining, qtysold, month)
	VALUES 
	('Fancy Shampoo', 'Hair', '13', '65', '25', 'Jun'),
	('Average Shampoo', 'Hair', '8', '195', '95', 'Feb'),
	('Kennys Conditioner', 'Hair', '10', '67', '43', 'Mar'),
	('Clean Hair Shampoo', 'Hair', '10', '106', '16', 'Apr'),
	('Pain-Free Panadol', 'Non-Presc', '5', '287', '123', 'May'),
	('Amazing Aspirin', 'Non-Presc', '10', '87', '13', 'Jun'),
	('Pain-Away', 'Non-Presc', '11', '457', '168', 'Jul'),
	('Pain-Away Rapid', 'Non-Presc', '15', '160', '62', 'Aug'),
	('Dans Decongestant', 'Non-Presc', '16', '45', '6', 'Sep'),	
	('Flu-Away', 'Non-Presc', '12', '89', '28', 'Oct'),
	('Taldroxin', 'Non-Presc', '10', '161', '39', 'Nov'),
	('Soft-Bands', 'Bandages/Band-aids', '12', '211', '89', 'Dec'),
	
	('Tuff Strips', 'Bandages/Band-aids', '16', '144', '86', 'Jun'),
	('Band-Aids', 'Bandages/Band-aids', '10', '273', '67', 'Feb'),
	('Cotton Bandage', 'Bandages/Band-aids', '14', '56', '4', 'Mar'),
	('Compression Bandage', 'Bandages/Band-aids', '20', '37', '3', 'Apr'),
	('Face Cleanser', 'Face Care', '11', '97', '33', 'May'),
	('Gentle Wash', 'Face Care', '16', '65', '13', 'Jun'),
	('Face Scrub', 'Face Care', '7', '110', '76', 'Jul'),
	('Skin-Glow', 'Face Care', '25', '51', '9', 'Aug'),
	('Fresh Wash', 'Face Care', '16', '78', '12', 'Sep'),
	('QTips', 'Misc', '5', '178', '85', 'Oct'),
	('Ear Cleaners', 'Misc', '6', '154', '16', 'Nov'),
	('Cotton Swabs', 'Misc', '4', '129', '21', 'Dec'),
	
	('Fancy Shampoo', 'Hair', '13', '65', '25', 'Jun'),
	('Average Shampoo', 'Hair', '8', '195', '95', 'Feb'),
	('Kennys Conditioner', 'Hair', '10', '67', '43', 'Mar'),
	('Clean Hair Shampoo', 'Hair', '10', '106', '16', 'Apr'),
	('Pain-Free Panadol', 'Non-Presc', '5', '287', '123', 'May'),
	('Amazing Aspirin', 'Non-Presc', '10', '87', '13', 'Jun'),
	('Pain-Away', 'Non-Presc', '11', '457', '168', 'Jul'),
	('Pain-Away Rapid', 'Non-Presc', '15', '160', '62', 'Aug'),
	('Dans Decongestant', 'Non-Presc', '16', '45', '6', 'Sep'),	
	('Flu-Away', 'Non-Presc', '12', '89', '28', 'Oct'),
	('Taldroxin', 'Non-Presc', '10', '161', '39', 'Nov'),
	('Soft-Bands', 'Bandages/Band-aids', '12', '211', '89', 'Dec'),
	
	('Tuff Strips', 'Bandages/Band-aids', '16', '144', '86', 'Jun'),
	('Band-Aids', 'Bandages/Band-aids', '10', '273', '67', 'Feb'),
	('Cotton Bandage', 'Bandages/Band-aids', '14', '56', '4', 'Mar'),
	('Compression Bandage', 'Bandages/Band-aids', '20', '37', '3', 'Apr'),
	('Face Cleanser', 'Face Care', '11', '97', '33', 'May'),
	('Gentle Wash', 'Face Care', '16', '65', '13', 'Jun'),
	('Face Scrub', 'Face Care', '7', '110', '76', 'Jul'),
	('Skin-Glow', 'Face Care', '25', '51', '9', 'Aug'),
	('Fresh Wash', 'Face Care', '16', '78', '12', 'Sep'),
	('QTips', 'Misc', '5', '178', '85', 'Oct'),
	('Ear Cleaners', 'Misc', '6', '154', '16', 'Nov'),
	('Cotton Swabs', 'Misc', '4', '129', '21', 'Dec')";
if (mysqli_query($conn, $data)) {
	echo "<p>New records added successfully</p>";
} else {
	echo "Error: " . $data . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
</html>