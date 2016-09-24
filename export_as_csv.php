<?php
session_start();
$server = "127.0.0.1";
$user = "root";
$pass = "pass";
$dbname = "salesdb";
// output headers so that the file is downloaded rather than displayed
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=salesdata.csv');

// create a file pointer connected to the output stream
$output = fopen('php://output', 'w');

// create an array with all of the sales column names
fputcsv($output, array('Prodid', 'Prodname', 'Category','Price','QtyRemaining','QtySold','Month','Week'));

// create the query
mysql_connect($server, $user, $pass);
mysql_select_db($dbname);
$rows = mysql_query('SELECT * FROM SALES');

// loop over the rows and output them in the csv file
while ($row = mysql_fetch_assoc($rows)) fputcsv($output, $row);
?>