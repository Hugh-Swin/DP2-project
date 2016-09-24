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

// output the column headings
fputcsv($output, array('Prodid', 'Prodname', 'Category','Price','QtyRemaining','QtySold','Month','Week'));

// fetch the data
mysql_connect($server, $user, $pass);
mysql_select_db($dbname);
$rows = mysql_query('SELECT * FROM SALES');

// loop over the rows, outputting them
while ($row = mysql_fetch_assoc($rows)) fputcsv($output, $row);
?>