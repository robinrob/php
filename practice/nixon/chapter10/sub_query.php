<?php //sub_query.php
//Performing a secondary query.
require_once 'login.php';

//Connect to server:
$db_server = mysql_connect($db_hostname, $db_username, $db_password);
if	(!$db_server) die ("Unable to connect to MySQL: " . mysql_error() . "<br />");

//Select database:
if (!mysql_select_db($db_database)) die("Unable to select database: " . mysql_error() . "<br />");

//Perform the query and extract data:
$query = "SELECT * FROM customers";
$result = mysql_query($query);
if (!$result) die ("Database access failed: " .mysql_error());
$rows = mysql_num_rows($result);

for ($j = 0; $j < $rows; ++$j)
{
	$row = mysql_fetch_row($result);
	echo "$row[0] purchased ISBN $row[1]:<br />";
	
	$subquery = "SELECT * FROM classics WHERE isbn='$row[1]'";
	
	$subresult = mysql_query($subquery);
	if (!$subresult) die ("Database access failed: " . mysql_error());
	$subrow = mysql_fetch_row($subresult);
	echo "  '$subrow[1]' by $subrow[0]<br />";
}
?>
