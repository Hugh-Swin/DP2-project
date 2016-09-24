<!DOCTYPE html>
<html lang="en">
<title>Assignment 3 - 9989951</title>
<head>
<meta charset="utf-8" />
<meta name="description" content="This document allows a user to view, edit and create new entries for the pharmacy products"/>
<meta name="authors" content="Hugh Rutland, Daniel Mastrowicz, Basem Gazzaz, Patrick Carty"/>
</head>
<body>
<h2>People Health Pharmacy (PHP) Inc.</h2>
<h3>Sales Reporting and Prediction System</h3>
<p><a href="./reset_database.php">Start/Reset the Database (Drops table, then re-adds with default data)</a></p>
</br>

<form id="modify" method="post" novalidate="novalidate" action="">
<select name="selectMonth" id="selectMonth">
	<option value="all">All</option>
	<option value="jun">June</option>
	<option value="jul">July</option>

</select> 
		<input type="submit" id="change" value="Display"/>
</form>

<!-- implement drop down box to select which month data is from here -->
<?php
	include_once "display_monthly_sales_report.php";
?>
<div id="salestable">

</div>

<!-- forms to edit table go here -->
</br>
</br>
<form id="remove" method="post" novalidate="novalidate" action="remove_process.php">
	<fieldset>
		<h4>Write the ID number of the product you would like to delete the entry for in the text box below:</h4>
		<input type="text" name="remove_id" id="remove_id" />
		<p><input type="submit" id="submit" value="Submit"/><p>
	</fieldset>
</form>
</br>
<form id="modify" method="post" novalidate="novalidate" action="modify_process.php">
	<fieldset>
		<h4>Write the value of the product ID for the product you would like to change, then change the other values as needed.</h4>
		ID:<input type="text" name="prodid" id="prodid/"/>
		Name:<input type="text" name="prodname" id="prodname"/>
		Category:<input type="text" name="category" id="category"/>
		Price:<input type="text" name="price" id="price" rows="1"/>
		Quantity:<input type="text" name="qtyremaining" id="qtyremaining"/>
		Amount Sold:<input type="text" name="qtysold" id="qtysold"/>
		Month:<input type="text" name="month" id="month"/>
		<p><input type="submit" id="submit" value="Submit"/><p>
	</fieldset>
</form>
</body>
</html>
