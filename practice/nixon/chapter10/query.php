<?php //query.php
require_once 'login.php';

//Connect to server:
$db_server = mysql_connect($db_hostname, $db_username, $db_password);
if ($db_server) echo "Connected to server!<br />";
else die ("Unable to connect to MySQL: " . mysql_error() . "<br />");

//Select database:
if (mysql_select_db($db_database)) echo "Selected $db_database!<br />";
else die("Unable to select database: " . mysql_error() . "<br />");

//Make a query:
$query = 'SELECT * FROM classics';
$result = mysql_query($query);
if($result) echo "Database $db_database accessed!<br />";
else die("Database access failed: " . mysql_error());

//Display the table data (one cell at a time!):
$rows = mysql_num_rows($result);
for ($j = 0; $j < $rows; ++$j)
{
	echo "Author: "		. mysql_result($result, $j, 'author') 	. "<br />";
	echo "Title: "		. mysql_result($result, $j, 'title') 	. "<br />";
	echo "Category: "	. mysql_result($result, $j, 'category') . "<br />";
	echo "Year: "		. mysql_result($result, $j, 'year') 	. "<br />";
	echo "ISBN: "		. mysql_result($result, $j, 'isbn') 	. "<br /><br />";
}

//Make a query:
$result = mysql_query($query);
if($result) echo "Database $db_database accessed!<br />";
else die("Database access failed: " . mysql_error());

//Display the table data (one row at a time, must faster):
for ($j = 0; $j < $rows; ++$j)
{
	$row = mysql_fetch_row($result);
	echo "Author: "		. $row[0]	. "<br />";
	echo "Title: "		. $row[1]	. "<br />";
	echo "Category: "	. $row[2]	. "<br />";
	echo "Year: "		. $row[3]	. "<br />";
	echo "ISBN: "		. $row[4]	. "<br /><br />";
}

//Close the connection to the MySQL server:
mysql_close($db_server)
?>