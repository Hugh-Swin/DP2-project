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
  <button id="predictSingleButton" type="button" >Predict</button>
  <button id="popularItemsButton" type="button" >Popular Items</button>
  <button id="popularGroupButton" type="button" >Popular Category</button>
</nav> 
<p><a href="./reset_database.php">Start/Reset the Database (Drops table, then re-adds with default data)</a></p>
</div>
<div id="currentForm">
</div>
<?php
	include_once "popularity_of_individual_items.php";
?>

<?php
	include_once "popularity_of_group.php";
?>

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
</br>
</br>
<script type="text/javascript" src="./select_form.js"></script>
</body>
</html>
