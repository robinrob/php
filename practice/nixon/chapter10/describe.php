<?php //describe.php
/* Use this code to quickly describe a created table and
 * output its data to the browser.
 */

require_once 'login.php';

//Connect to server:
$db_server = mysql_connect($db_hostname, $db_username, $db_password);
if	(!$db_server) die ("Unable to connect to MySQL: " . mysql_error() . "<br />");

//Select database:
if (!mysql_select_db($db_database)) die("Unable to select database: " . mysql_error() . "<br />");

//Perform the query and extract data:
$query = "DESCRIBE cats";
$result = mysql_query($query);
if (!$result) die ("Database access failed: " .mysql_error());
$rows = mysql_num_rows($result);

//Display the data in a html table:
echo "<table><tr> <th>Column</th> <th>Type</th>
	  <th>Null</th> <th>Key</th> </tr>";

for ($j = 0; $j < $rows; ++$j)
{
	$row = mysql_fetch_row($result);
	echo "<tr>";
	for ($k = 0; $k < 4; ++$k) echo "<td>$row[$k]</td>";
	echo "</tr>";
}

echo "</table>";
?>