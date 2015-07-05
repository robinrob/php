<?php
require_once 'login.php';

//Connect to server:
$db_server = mysql_connect($db_hostname, $db_username, $db_password);
if ($db_server) echo "Connected to server!<br />";
else die ("Unable to connect to MySQL: " . mysql_error() . "<br />");
//Or:
$db_server = mysql_connect($db_hostname, $db_username, $db_password);
if	(!$db_server) die ("Unable to connect to MySQL: " . mysql_error() . "<br />");

//Select database:
if (mysql_select_db($db_database)) echo "Selected $db_database!<br />";
else die("Unable to select database: " . mysql_error() . "<br />");
//Or:
if (!mysql_select_db($db_database)) die("Unable to select database: " . mysql_error() . "<br />");

//Make a query:
$query = 'SELECT * FROM classics';
$result = mysql_query($query);
if($result) echo "Database $db_database accessed!<br />";
else die("Database access failed: " . mysql_error());
//Or:
$query = 'SELECT * FROM classics';
$result = mysql_query($query);
if (!$result) die("Database access failed: " . mysql_error());
?>