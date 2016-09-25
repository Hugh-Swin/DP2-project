<!DOCTYPE html>
<html lang="en">
<title>Assignment 3 - 9989951</title>
<head>
<meta charset="utf-8" />
<meta name="description" content="This document allows a user to view, edit and create new entries for the pharmacy products"/>
<meta name="authors" content="Hugh Rutland, Daniel Mastrowicz, Basem Gazzaz, Patrick Carty"/>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h2>People Health Pharmacy (PHP) Inc.</h2>
<h3>Sales Reporting and Prediction System</h3>
 <nav>
  <button id="addButton" type="button">Add</button>
  <button id="modifyButton" type="button">Modify</button>
  <button id="removeButton" type="button">Remove</button>
  <button id="exportButton" type="button">Export</button>
</nav> 
<p><a href="./reset_database.php">Start/Reset the Database (Drops table, then re-adds with default data)</a></p>
</br>

<div id="currentForm">
</div>
</br>

<form id="modify" method="post" novalidate="novalidate" action="">
<select name="selectMonth" id="selectMonth">
	<option value="all">All</option>
	<option value="jun">June</option>
	<option value="jul">July</option>
</select> 
<select name="selectWeek" id="selectWeek">
	<option value="all">All</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
</select> 
		<input type="submit" id="change" value="Display"/>
</form>
</br>
<!-- implement drop down box to select which month data is from here -->











<?php
	include_once "display_monthly_sales_report.php";
?>
<div id="salestable">

</div>

<form id="export" method="post" novalidate="novalidate" action="export_as_csv.php">
		<h4>Export the sales data as a CSV file.</h4>
		<p><input type="submit" id="submit" value="Export"/><p>
</form>
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
<script type="text/javascript" src="./select_form.js"></script>
</body>
</html>
