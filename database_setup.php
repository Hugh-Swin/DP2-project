<?php
$sales = "CREATE TABLE Sales (
	prodid INT(5) AUTO_INCREMENT PRIMARY KEY,
	prodname VARCHAR(20),
	category VARCHAR(20),
	price INT(6),
	qtyremaining INT(10),
	qtysold INT(10),
	month VARCHAR(3),
	week INT(1)
	)";
	
if (mysqli_query($conn, $sales)) {
	echo "<p>Table 'Sales' created succesfully</p>";
} else {
	echo "<p>Error creating table 'Sales'</p>";
}
//table of all products
//add week data for sprint2
$data = "INSERT INTO Sales (prodname, category, price, qtyremaining, qtysold, month,week)
	VALUES 
	('Fancy Shampoo', 'Hair', '13', '65', '25', 'Jun','1'),
	('Average Shampoo', 'Hair', '8', '195', '95', 'Jun','1'),
	('Kennys Conditioner', 'Hair', '10', '67', '43', 'Jun','1'),
	('Clean Hair Shampoo', 'Hair', '10', '106', '16', 'Jun','1'),
	
	('Pain-Free Panadol', 'Non-Presc', '5', '287', '123', 'Jun','1'),
	('Amazing Aspirin', 'Non-Presc', '10', '87', '13', 'Jun','1'),
	('Pain-Away', 'Non-Presc', '11', '457', '168', 'Jun','1'),
	('Pain-Away Rapid', 'Non-Presc', '15', '160', '62', 'Jun','1'),
	('Dans Decongestant', 'Non-Presc', '16', '45', '6', 'Jun','1'),	
	('Flu-Away', 'Non-Presc', '12', '89', '28', 'Jun','1'),
	('Taldroxin', 'Non-Presc', '10', '161', '39', 'Jun','1'),
	
	('Soft-Bands', 'Bandages/Band-aids', '12', '211', '89', 'Jun','1'),
	('Tuff Strips', 'Bandages/Band-aids', '16', '144', '86', 'Jun','1'),
	('Band-Aids', 'Bandages/Band-aids', '10', '273', '67', 'Jun','1'),
	('Cotton Bandage', 'Bandages/Band-aids', '14', '56', '4', 'Jun','1'),
	('Compression Bandage', 'Bandages/Band-aids', '20', '37', '3', 'Jun','1'),
	
	('Face Cleanser', 'Face Care', '11', '97', '33', 'Jun','1'),
	('Gentle Wash', 'Face Care', '16', '65', '13', 'Jun','1'),
	('Face Scrub', 'Face Care', '7', '110', '76', 'Jun','1'),
	('Skin-Glow', 'Face Care', '25', '51', '9', 'Jun','1'),
	('Fresh Wash', 'Face Care', '16', '78', '12', 'Jun','1'),
	
	('Q-Tips', 'Misc', '5', '178', '44', 'Jun','1'),
	('Ear Cleaners', 'Misc', '6', '132', '12', 'Jun','1'),
	('Cotton Swabs', 'Misc', '4', '111', '19', 'Jun','1'),
	
	
	('Fancy Shampoo', 'Hair', '13', '69', '21', 'Jun','2'),
	('Average Shampoo', 'Hair', '8', '160', '33', 'Jun','2'),
	('Kennys Conditioner', 'Hair', '10', '55', '49', 'Jun','2'),
	('Clean Hair Shampoo', 'Hair', '10', '98', '12', 'Jun','2'),
	
	('Pain-Free Panadol', 'Non-Presc', '5', '315', '110', 'Jun','2'),
	('Amazing Aspirin', 'Non-Presc', '10', '66', '12', 'Jun','2'),
	('Pain-Away', 'Non-Presc', '11', '457', '168', 'Jun','2'),
	('Pain-Away Rapid', 'Non-Presc', '15', '160', '62', 'Jun','2'),
	('Dans Decongestant', 'Non-Presc', '16', '45', '6', 'Jun','2'),	
	('Flu-Away', 'Non-Presc', '12', '89', '28', 'Jun','2'),
	('Taldroxin', 'Non-Presc', '10', '161', '39', 'Jun','2'),
	
	('Soft-Bands', 'Bandages/Band-aids', '12', '211', '89', 'Jun','2'),
	('Tuff Strips', 'Bandages/Band-aids', '16', '144', '86', 'Jun','2'),
	('Band-Aids', 'Bandages/Band-aids', '10', '273', '67', 'Jun','2'),
	('Cotton Bandage', 'Bandages/Band-aids', '14', '56', '4', 'Jun','2'),
	('Compression Bandage', 'Bandages/Band-aids', '20', '37', '3', 'Jun','2'),
	
	('Face Cleanser', 'Face Care', '11', '97', '33', 'Jun','2'),
	('Gentle Wash', 'Face Care', '16', '65', '13', 'Jun','2'),
	('Face Scrub', 'Face Care', '7', '110', '76', 'Jun','2'),
	('Skin-Glow', 'Face Care', '25', '51', '9', 'Jun','2'),
	('Fresh Wash', 'Face Care', '16', '78', '12', 'Jun','2'),
	
	('Q-Tips', 'Misc', '5', '178', '85', 'Jun','2'),
	('Ear Cleaners', 'Misc', '6', '154', '16', 'Jun','2'),
	('Cotton Swabs', 'Misc', '4', '129', '21', 'Jun','2'),
	
	('Fancy Shampoo', 'Hair', '13', '69', '21', 'Jun','3'),
	('Average Shampoo', 'Hair', '8', '160', '33', 'Jun','3'),
	('Kennys Conditioner', 'Hair', '10', '55', '49', 'Jun','3'),
	('Clean Hair Shampoo', 'Hair', '10', '98', '12', 'Jun','3'),
	
	('Pain-Free Panadol', 'Non-Presc', '5', '315', '110', 'Jun','3'),
	('Amazing Aspirin', 'Non-Presc', '10', '66', '12', 'Jun','3'),
	('Pain-Away', 'Non-Presc', '11', '457', '168', 'Jun','3'),
	('Pain-Away Rapid', 'Non-Presc', '15', '160', '62', 'Jun','3'),
	('Dans Decongestant', 'Non-Presc', '16', '45', '6', 'Jun','3'),	
	('Flu-Away', 'Non-Presc', '12', '89', '28', 'Jun','3'),
	('Taldroxin', 'Non-Presc', '10', '161', '39', 'Jun','3'),
	
	('Soft-Bands', 'Bandages/Band-aids', '12', '211', '89', 'Jun','3'),
	('Tuff Strips', 'Bandages/Band-aids', '16', '144', '86', 'Jun','3'),
	('Band-Aids', 'Bandages/Band-aids', '10', '273', '67', 'Jun','3'),
	('Cotton Bandage', 'Bandages/Band-aids', '14', '56', '4', 'Jun','3'),
	('Compression Bandage', 'Bandages/Band-aids', '20', '37', '3', 'Jun','3'),
	
	('Face Cleanser', 'Face Care', '11', '97', '33', 'Jun','3'),
	('Gentle Wash', 'Face Care', '16', '65', '13', 'Jun','3'),
	('Face Scrub', 'Face Care', '7', '110', '76', 'Jun','3'),
	('Skin-Glow', 'Face Care', '25', '51', '9', 'Jun','3'),
	('Fresh Wash', 'Face Care', '16', '78', '12', 'Jun','3'),
	
	('Q-Tips', 'Misc', '5', '178', '85', 'Jun','3'),
	('Ear Cleaners', 'Misc', '6', '154', '16', 'Jun','3'),
	('Cotton Swabs', 'Misc', '4', '129', '21', 'Jun','3'),
	

	('Fancy Shampoo', 'Hair', '13', '69', '21', 'Jun','4'),
	('Average Shampoo', 'Hair', '8', '160', '33', 'Jun','4'),
	('Kennys Conditioner', 'Hair', '10', '55', '49', 'Jun','4'),
	('Clean Hair Shampoo', 'Hair', '10', '98', '12', 'Jun','4'),
	
	('Pain-Free Panadol', 'Non-Presc', '5', '315', '110', 'Jun','4'),
	('Amazing Aspirin', 'Non-Presc', '10', '66', '12', 'Jun','4'),
	('Pain-Away', 'Non-Presc', '11', '457', '168', 'Jun','4'),
	('Pain-Away Rapid', 'Non-Presc', '15', '160', '62', 'Jun','4'),
	('Dans Decongestant', 'Non-Presc', '16', '45', '6', 'Jun','4'),	
	('Flu-Away', 'Non-Presc', '12', '89', '28', 'Jun','4'),
	('Taldroxin', 'Non-Presc', '10', '161', '39', 'Jun','4'),
	
	('Soft-Bands', 'Bandages/Band-aids', '12', '211', '89', 'Jun','4'),
	('Tuff Strips', 'Bandages/Band-aids', '16', '144', '86', 'Jun','4'),
	('Band-Aids', 'Bandages/Band-aids', '10', '273', '67', 'Jun','4'),
	('Cotton Bandage', 'Bandages/Band-aids', '14', '56', '4', 'Jun','4'),
	('Compression Bandage', 'Bandages/Band-aids', '20', '37', '3', 'Jun','4'),
	
	('Face Cleanser', 'Face Care', '11', '97', '33', 'Jun','4'),
	('Gentle Wash', 'Face Care', '16', '65', '13', 'Jun','4'),
	('Face Scrub', 'Face Care', '7', '110', '76', 'Jun','4'),
	('Skin-Glow', 'Face Care', '25', '51', '9', 'Jun','4'),
	('Fresh Wash', 'Face Care', '16', '78', '12', 'Jun','4'),
	
	('Q-Tips', 'Misc', '5', '178', '85', 'Jun','4'),
	('Ear Cleaners', 'Misc', '6', '154', '16', 'Jun','4'),
	('Cotton Swabs', 'Misc', '4', '129', '21', 'Jun','4'),
	
	('Fancy Shampoo', 'Hair', '13', '81', '44', 'Jul','1'),
	('Average Shampoo', 'Hair', '8', '115', '51', 'Jul','1'),
	('Kennys Conditioner', 'Hair', '10', '54', '91', 'Jul','1'),
	('Clean Hair Shampoo', 'Hair', '10', '38', '30', 'Jul','1'),
	
	('Pain-Free Panadol', 'Non-Presc', '5', '260', '101', 'Jul','1'),
	('Amazing Aspirin', 'Non-Presc', '10', '43', '37', 'Jul','1'),
	('Pain-Away', 'Non-Presc', '11', '427', '198', 'Jul','1'),
	('Pain-Away Rapid', 'Non-Presc', '16', '207', '23', 'Jul','1'),
	('Dans Decongestant', 'Non-Presc', '16', '40', '11', 'Jul','1'),	
	('Flu-Away', 'Non-Presc', '12', '32', '78', 'Jul','1'),
	('Taldroxin', 'Non-Presc', '10', '157', '43', 'Jul','1'),
	
	('Soft-Bands', 'Bandages/Band-aids', '12', '116', '184', 'Jul','1'),
	('Tuff Strips', 'Bandages/Band-aids', '16', '168', '52', 'Jul','1'),
	('Band-Aids', 'Bandages/Band-aids', '10', '261', '78', 'Jul','1'),
	('Cotton Bandage', 'Bandages/Band-aids', '14', '55', '5', 'Jul','1'),
	('Compression Bandage', 'Bandages/Band-aids', '20', '39', '2', 'Jul','1'),
	
	('Face Cleanser', 'Face Care', '11', '110', '10', 'Jul','1'),
	('Gentle Wash', 'Face Care', '16', '49', '11', 'Jul','1'),
	('Face Scrub', 'Face Care', '7', '89', '91', 'Jul','1'),
	('Skin-Glow', 'Face Care', '25', '61', '9', 'Jul','1'),
	('Fresh Wash', 'Face Care', '16', '65', '25', 'Jul','1'),
	
	('Q-Tips', 'Misc', '5', '164', '96', 'Jul','1'),
	('Ear Cleaners', 'Misc', '6', '148', '62', 'Jul','1'),
	('Cotton Swabs', 'Misc', '4', '119', '31', 'Jul','1'),

	('Fancy Shampoo', 'Hair', '13', '61', '28', 'Jul','2'),
	('Average Shampoo', 'Hair', '8', '175', '67', 'Jul','2'),
	('Kennys Conditioner', 'Hair', '10', '54', '72', 'Jul','2'),
	('Clean Hair Shampoo', 'Hair', '10', '98', '20', 'Jul','2'),
	
	('Pain-Free Panadol', 'Non-Presc', '5', '269', '106', 'Jul','2'),
	('Amazing Aspirin', 'Non-Presc', '10', '43', '37', 'Jul','2'),
	('Pain-Away', 'Non-Presc', '11', '427', '198', 'Jul','2'),
	('Pain-Away Rapid', 'Non-Presc', '16', '155', '23', 'Jul','2'),
	('Dans Decongestant', 'Non-Presc', '16', '40', '21', 'Jul','2'),	
	('Flu-Away', 'Non-Presc', '12', '32', '78', 'Jul','2'),
	('Taldroxin', 'Non-Presc', '10', '157', '43', 'Jul','2'),
	
	('Soft-Bands', 'Bandages/Band-aids', '12', '116', '184', 'Jul','2'),
	('Tuff Strips', 'Bandages/Band-aids', '16', '168', '52', 'Jul','2'),
	('Band-Aids', 'Bandages/Band-aids', '10', '261', '78', 'Jul','2'),
	('Cotton Bandage', 'Bandages/Band-aids', '14', '55', '5', 'Jul','2'),
	('Compression Bandage', 'Bandages/Band-aids', '20', '39', '2', 'Jul','2'),
	
	('Face Cleanser', 'Face Care', '11', '110', '10', 'Jul','2'),
	('Gentle Wash', 'Face Care', '16', '49', '11', 'Jul','2'),
	('Face Scrub', 'Face Care', '7', '89', '91', 'Jul','2'),
	('Skin-Glow', 'Face Care', '25', '61', '9', 'Jul','2'),
	('Fresh Wash', 'Face Care', '16', '65', '25', 'Jul','2'),
	
	('Q-Tips', 'Misc', '5', '164', '96', 'Jul','2'),
	('Ear Cleaners', 'Misc', '6', '148', '62', 'Jul','2'),
	('Cotton Swabs', 'Misc', '4', '119', '31', 'Jul','2'),
	
	('Fancy Shampoo', 'Hair', '13', '61', '28', 'Jul','3'),
	('Average Shampoo', 'Hair', '8', '175', '67', 'Jul','3'),
	('Kennys Conditioner', 'Hair', '10', '54', '72', 'Jul','3'),
	('Clean Hair Shampoo', 'Hair', '10', '98', '20', 'Jul','3'),
	
	('Pain-Free Panadol', 'Non-Presc', '5', '110', '102', 'Jul','3'),
	('Amazing Aspirin', 'Non-Presc', '10', '43', '37', 'Jul','3'),
	('Pain-Away', 'Non-Presc', '11', '427', '138', 'Jul','3'),
	('Pain-Away Rapid', 'Non-Presc', '16', '167', '23', 'Jul','3'),
	('Dans Decongestant', 'Non-Presc', '16', '40', '11', 'Jul','3'),	
	('Flu-Away', 'Non-Presc', '12', '32', '78', 'Jul','3'),
	('Taldroxin', 'Non-Presc', '10', '157', '43', 'Jul','3'),
	
	('Soft-Bands', 'Bandages/Band-aids', '12', '116', '184', 'Jul','3'),
	('Tuff Strips', 'Bandages/Band-aids', '16', '158', '52', 'Jul','3'),
	('Band-Aids', 'Bandages/Band-aids', '10', '261', '78', 'Jul','3'),
	('Cotton Bandage', 'Bandages/Band-aids', '14', '55', '5', 'Jul','3'),
	('Compression Bandage', 'Bandages/Band-aids', '20', '39', '3', 'Jul','3'),
	
	('Face Cleanser', 'Face Care', '11', '110', '10', 'Jul','3'),
	('Gentle Wash', 'Face Care', '16', '49', '11', 'Jul','3'),
	('Face Scrub', 'Face Care', '7', '89', '91', 'Jul','3'),
	('Skin-Glow', 'Face Care', '25', '61', '9', 'Jul','3'),
	('Fresh Wash', 'Face Care', '16', '65', '25', 'Jul','3'),
	
	('Q-Tips', 'Misc', '5', '164', '96', 'Jul','3'),
	('Ear Cleaners', 'Misc', '6', '148', '62', 'Jul','3'),
	('Cotton Swabs', 'Misc', '4', '119', '31', 'Jul','3'),
	
	('Fancy Shampoo', 'Hair', '13', '61', '28', 'Jul','4'),
	('Average Shampoo', 'Hair', '8', '175', '67', 'Jul','4'),
	('Kennys Conditioner', 'Hair', '10', '54', '72', 'Jul','4'),
	('Clean Hair Shampoo', 'Hair', '10', '98', '20', 'Jul','4'),
	
	('Pain-Free Panadol', 'Non-Presc', '5', '300', '106', 'Jul','4'),
	('Amazing Aspirin', 'Non-Presc', '10', '43', '37', 'Jul','4'),
	('Pain-Away', 'Non-Presc', '11', '427', '148', 'Jul','4'),
	('Pain-Away Rapid', 'Non-Presc', '16', '197', '14', 'Jul','4'),
	('Dans Decongestant', 'Non-Presc', '16', '40', '11', 'Jul','4'),	
	('Flu-Away', 'Non-Presc', '12', '32', '78', 'Jul','4'),
	('Taldroxin', 'Non-Presc', '10', '157', '43', 'Jul','4'),
	
	('Soft-Bands', 'Bandages/Band-aids', '12', '116', '184', 'Jul','4'),
	('Tuff Strips', 'Bandages/Band-aids', '16', '134', '52', 'Jul','4'),
	('Band-Aids', 'Bandages/Band-aids', '10', '261', '78', 'Jul','4'),
	('Cotton Bandage', 'Bandages/Band-aids', '14', '55', '5', 'Jul','4'),
	('Compression Bandage', 'Bandages/Band-aids', '20', '39', '3', 'Jul','4'),
	
	('Face Cleanser', 'Face Care', '11', '110', '10', 'Jul','4'),
	('Gentle Wash', 'Face Care', '16', '49', '11', 'Jul','4'),
	('Face Scrub', 'Face Care', '7', '89', '91', 'Jul','4'),
	('Skin-Glow', 'Face Care', '25', '61', '9', 'Jul','4'),
	('Fresh Wash', 'Face Care', '16', '65', '25', 'Jul','4'),
	
	('Q-Tips', 'Misc', '5', '164', '96', 'Jul','4'),
	('Ear Cleaners', 'Misc', '6', '148', '62', 'Jul','4'),
	('Cotton Swabs', 'Misc', '4', '119', '31', 'Jul','4')
";

if (mysqli_query($conn, $data)) {
	echo "<p>New records added successfully</p>";
} else {
	echo "Error: " . $data . "<br>" . mysqli_error($conn);
}
?>