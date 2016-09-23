<?php
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
	('Average Shampoo', 'Hair', '8', '195', '95', 'Jun'),
	('Kennys Conditioner', 'Hair', '10', '67', '43', 'Jun'),
	('Clean Hair Shampoo', 'Hair', '10', '106', '16', 'Jun'),
	
	('Pain-Free Panadol', 'Non-Presc', '5', '287', '123', 'Jun'),
	('Amazing Aspirin', 'Non-Presc', '10', '87', '13', 'Jun'),
	('Pain-Away', 'Non-Presc', '11', '457', '168', 'Jun'),
	('Pain-Away Rapid', 'Non-Presc', '15', '160', '62', 'Jun'),
	('Dans Decongestant', 'Non-Presc', '16', '45', '6', 'Jun'),	
	('Flu-Away', 'Non-Presc', '12', '89', '28', 'Jun'),
	('Taldroxin', 'Non-Presc', '10', '161', '39', 'Jun'),
	
	('Soft-Bands', 'Bandages/Band-aids', '12', '211', '89', 'Jun'),
	('Tuff Strips', 'Bandages/Band-aids', '16', '144', '86', 'Jun'),
	('Band-Aids', 'Bandages/Band-aids', '10', '273', '67', 'Jun'),
	('Cotton Bandage', 'Bandages/Band-aids', '14', '56', '4', 'Jun'),
	('Compression Bandage', 'Bandages/Band-aids', '20', '37', '3', 'Jun'),
	
	('Face Cleanser', 'Face Care', '11', '97', '33', 'Jun'),
	('Gentle Wash', 'Face Care', '16', '65', '13', 'Jun'),
	('Face Scrub', 'Face Care', '7', '110', '76', 'Jun'),
	('Skin-Glow', 'Face Care', '25', '51', '9', 'Jun'),
	('Fresh Wash', 'Face Care', '16', '78', '12', 'Jun'),
	
	('Q-Tips', 'Misc', '5', '178', '85', 'Jun'),
	('Ear Cleaners', 'Misc', '6', '154', '16', 'Jun'),
	('Cotton Swabs', 'Misc', '4', '129', '21', 'Jun'),
	
	
	('Fancy Shampoo', 'Hair', '13', '61', '28', 'Jul'),
	('Average Shampoo', 'Hair', '8', '175', '67', 'Jul'),
	('Kennys Conditioner', 'Hair', '10', '54', '72', 'Jul'),
	('Clean Hair Shampoo', 'Hair', '10', '98', '20', 'Jul'),
	
	('Pain-Free Panadol', 'Non-Presc', '5', '300', '106', 'Jul'),
	('Amazing Aspirin', 'Non-Presc', '10', '43', '37', 'Jul'),
	('Pain-Away', 'Non-Presc', '11', '427', '198', 'Jul'),
	('Pain-Away Rapid', 'Non-Presc', '16', '207', '23', 'Jul'),
	('Dans Decongestant', 'Non-Presc', '16', '40', '11', 'Jul'),	
	('Flu-Away', 'Non-Presc', '12', '32', '78', 'Jul'),
	('Taldroxin', 'Non-Presc', '10', '157', '43', 'Jul'),
	
	('Soft-Bands', 'Bandages/Band-aids', '12', '116', '184', 'Jul'),
	('Tuff Strips', 'Bandages/Band-aids', '16', '168', '52', 'Jul'),
	('Band-Aids', 'Bandages/Band-aids', '10', '261', '78', 'Jul'),
	('Cotton Bandage', 'Bandages/Band-aids', '14', '55', '5', 'Jul'),
	('Compression Bandage', 'Bandages/Band-aids', '20', '39', '1', 'Jul'),
	
	('Face Cleanser', 'Face Care', '11', '110', '10', 'Jul'),
	('Gentle Wash', 'Face Care', '16', '49', '11', 'Jul'),
	('Face Scrub', 'Face Care', '7', '89', '91', 'Jul'),
	('Skin-Glow', 'Face Care', '25', '61', '9', 'Jul'),
	('Fresh Wash', 'Face Care', '16', '65', '25', 'Jul'),
	
	('Q-Tips', 'Misc', '5', '164', '96', 'Jul'),
	('Ear Cleaners', 'Misc', '6', '148', '62', 'Jul'),
	('Cotton Swabs', 'Misc', '4', '119', '31', 'Jul')";

if (mysqli_query($conn, $data)) {
	echo "<p>New records added successfully</p>";
} else {
	echo "Error: " . $data . "<br>" . mysqli_error($conn);
}
?>