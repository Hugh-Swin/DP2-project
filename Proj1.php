<!DOCTYPE html>
<html lang="en">

<title>Assignment 3 - 9989951</title>
<meta charset="utf-8" />
<meta name="description" content="This document allows a user to view, edit and create new entries for the pharmacy products"/>
<meta name="authors" content="Hugh Rutland, Daniel Mastrowicz, Basem Gazzaz, Patrick Carty"/>
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
$sales = "CREATE TABLE Sales (
	prodid INT(5) AUTO_INCREMENT PRIMARY KEY,
	prodname VARCHAR(20),
	category VARCHAR(20),
	price INT(6),
	qtyremaining INT(10),
	qtysold INT(10),
	month VARCHAR(20)
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
	('Average Shampoo', 'Hair', '8', '195', '95', 'Fab'),
	('Kennys Conditioner', 'Hair', '10', '67', '43', 'Mar'),
	('Clean Hair Shampoo', 'Hair', '10', '106', '16', 'Apr'),
	('Pain-Free Panadol', 'Non-Presc', '5', '287', '123', 'May'),
	('Amazing Aspirin', 'Non-Presc', '10', '87', '13', 'Jun'),
	('Pain-Away', 'Non-Presc', '11', '457', '168', 'Jul'),
	('Pain-Away Rapid', 'Non-Presc', '15', '160', '62', 'Aug'),
	('Dans Decongestant', 'Non-Presc', '16', '45', '6', 'sep'),	
	('Flu-Away', 'Non-Presc', '12', '89', '28', 'Oct'),
	('Taldroxin', 'Non-Presc', '10', '161', '39', 'Nov'),
	('Soft-Bands', 'Bandages/Band-aids', '12', '211', '89', 'Dec'),
	
	('Tuff Strips', 'Bandages/Band-aids', '16', '144', '86', 'Jun'),
	('Band-Aids', 'Bandages/Band-aids', '10', '273', '67', 'Fab'),
	('Cotton Bandage', 'Bandages/Band-aids', '14', '56', '4', 'Mar'),
	('Compression Bandage', 'Bandages/Band-aids', '20', '37', '3', 'Apr'),
	('Face Cleanser', 'Face Care', '11', '97', '33', 'May'),
	('Gentle Wash', 'Face Care', '16', '65', '13', 'Jun'),
	('Face Scrub', 'Face Care', '7', '110', '76', 'Jul'),
	('Skin-Glow', 'Face Care', '25', '51', '9', 'Aug'),
	('Fresh Wash', 'Face Care', '16', '78', '12', 'Sep'),
	('QTips', 'Misc', '5', '178', '85', 'Oct'),
	('Ear Cleaners', 'Misc', '6', '154', '16', 'Nov'),
	('Cotton Swabs', 'Misc', '4', '129', '21', 'Dec')",
	
	('Fancy Shampoo', 'Hair', '13', '65', '25', 'Jun'),
	('Average Shampoo', 'Hair', '8', '195', '95', 'Fab'),
	('Kennys Conditioner', 'Hair', '10', '67', '43', 'Mar'),
	('Clean Hair Shampoo', 'Hair', '10', '106', '16', 'Apr'),
	('Pain-Free Panadol', 'Non-Presc', '5', '287', '123', 'May'),
	('Amazing Aspirin', 'Non-Presc', '10', '87', '13', 'Jun'),
	('Pain-Away', 'Non-Presc', '11', '457', '168', 'Jul'),
	('Pain-Away Rapid', 'Non-Presc', '15', '160', '62', 'Aug'),
	('Dans Decongestant', 'Non-Presc', '16', '45', '6', 'sep'),	
	('Flu-Away', 'Non-Presc', '12', '89', '28', 'Oct'),
	('Taldroxin', 'Non-Presc', '10', '161', '39', 'Nov'),
	('Soft-Bands', 'Bandages/Band-aids', '12', '211', '89', 'Dec'),
	
	('Tuff Strips', 'Bandages/Band-aids', '16', '144', '86', 'Jun'),
	('Band-Aids', 'Bandages/Band-aids', '10', '273', '67', 'Fab'),
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

<form id="remove" method="post" novalidate="novalidate" action="remove_process.php">
	<fieldset>
		<h4>Write the id number of the product you would like to delete the entry for in the text box below:</h4>
		<textarea name="remove_id" id="remove_id" rows="1" cols="30"></textarea>
		<p><input type="submit" id="submit" value="Submit"/><p>
	</fieldset>
</form>

<form id="modify" method="post" novalidate="novalidate" action="modify_process.php">
	<fieldset>
		<h4>Write the value of the product id, then change the other values as needed.</h4>
		Product Id:<textarea name="prodid" id="prodid" rows="1" cols="30"></textarea>
		Product Name:<textarea name="prodname" id="prodname" rows="1" cols="30"></textarea>
		Category:<textarea name="category" id="category" rows="1" cols="30"></textarea>
		Price:<textarea name="price" id="price" rows="1" cols="30"></textarea>
		Quantity:<textarea name="qtyremaining" id="qtyremaining" rows="1" cols="30"></textarea>
		Amount Sold:<textarea name="qtysold" id="qtysold" rows="1" cols="30"></textarea>
		<p><input type="submit" id="submit" value="Submit"/><p>
	</fieldset>
</form>
</html>
