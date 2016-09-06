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
	qtysold INT(10)
	)";

if (mysqli_query($conn, $sales)) {
	echo "<p>Table 'Sales' created succesfully</p>";
} else {
	echo "<p>Error creating table 'Sales'</p>";
}

//shampoo and hair products
$data = "INSERT INTO Sales (prodname, category, price, qtyremaining, qtysold)
	VALUES ('Fancy Shampoo', 'Hair', '13', '65', '25');";
$data .= "INSERT INTO Sales (prodname, category, price, qtyremaining, qtysold)
	VALUES ('Average Shampoo', 'Hair', '8', '195', '95');";
$data .= "INSERT INTO Sales (prodname, category, price, qtyremaining, qtysold)
	VALUES ('Kenny's Conditioner', 'Hair', '10', '67', '43');";
$data .= "INSERT INTO Sales (prodname, category, price, qtyremaining, qtysold)
	VALUES ('Clean Hair Shampoo', 'Hair', '10', '106', '16');";

//non-presc medicine
$data .= "INSERT INTO Sales (prodname, category, price, qtyremaining, qtysold)
	VALUES ('Pain-Free Panadol', 'Non-Presc', '5', '287', '123');";
$data .= "INSERT INTO Sales (prodname, category, price, qtyremaining, qtysold)
	VALUES ('Amazing Aspirin', 'Non-Presc', '10', '87', '13');";
$data .= "INSERT INTO Sales (prodname, category, price, qtyremaining, qtysold)
	VALUES ('Pain-Away', 'Non-Presc', '11', '457', '168');";
$data .= "INSERT INTO Sales (prodname, category, price, qtyremaining, qtysold)
	VALUES ('Pain-Away Rapid', 'Non-Presc', '15', '160', '62');";
$data .= "INSERT INTO Sales (prodname, category, price, qtyremaining, qtysold)
	VALUES ('Dan's Decongestant', 'Non-Presc', '16', '45', '6');";
$data .= "INSERT INTO Sales (prodname, category, price, qtyremaining, qtysold)
	VALUES ('Flu-Away', 'Non-Presc', '12', '89', '28');";
$data .= "INSERT INTO Sales (prodname, category, price, qtyremaining, qtysold)
	VALUES ('Taldroxin', 'Non-Presc', '10', '161', '39');";

//bandages and bandaids
$data .= "INSERT INTO Sales (prodname, category, price, qtyremaining, qtysold)
	VALUES ('Soft-Bands', 'Bandages/Band-aids', '12', '211', '89');";
$data .= "INSERT INTO Sales (prodname, category, price, qtyremaining, qtysold)
	VALUES ('Tuff Strips', 'Bandages/Band-aids', '16', '144', '86');";
$data .= "INSERT INTO Sales (prodname, category, price, qtyremaining, qtysold)
	VALUES ('Band-Aids', 'Bandages/Band-aids', '10', '273', '67');";
$data .= "INSERT INTO Sales (prodname, category, price, qtyremaining, qtysold)
	VALUES ('Cotton Bandage', 'Bandages/Band-aids', '14', '56', '4');";
$data .= "INSERT INTO Sales (prodname, category, price, qtyremaining, qtysold)
	VALUES ('Compression Bandage', 'Bandages/Band-aids', '20', '37', '3');";

//face care
$data .= "INSERT INTO Sales (prodname, category, price, qtyremaining, qtysold)
	VALUES ('Face Cleanser', 'Face Care', '11', '97', '33');";
$data .= "INSERT INTO Sales (prodname, category, price, qtyremaining, qtysold)
	VALUES ('Gentle Wash', 'Face Care', '16', '65', '13');";
$data .= "INSERT INTO Sales (prodname, category, price, qtyremaining, qtysold)
	VALUES ('Face Scrub', 'Face Care', '7', '110', '76');";
$data .= "INSERT INTO Sales (prodname, category, price, qtyremaining, qtysold)
	VALUES ('Skin-Glow', 'Face Care', '25', '51', '9');";
$data .= "INSERT INTO Sales (prodname, category, price, qtyremaining, qtysold)
	VALUES ('Fresh Wash', 'Face Care', '16', '78', '12');";

//misc
$data .= "INSERT INTO Sales (prodname, category, price, qtyremaining, qtysold)
	VALUES ('QTips', 'Misc', '5', '178', '85');";
$data .= "INSERT INTO Sales (prodname, category, price, qtyremaining, qtysold)
	VALUES ('Ear Cleaners', 'Misc', '6', '154', '16');";
$data .= "INSERT INTO Sales (prodname, category, price, qtyremaining, qtysold)
	VALUES ('Cotton Swabs', 'Misc', '4', '129', '21');";

if (mysqli_multi_query($conn, $data)) {
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

</html>