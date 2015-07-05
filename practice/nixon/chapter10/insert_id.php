<?php //insert_id.php
//Adding data to cats table and reporting the insertion id.
require_once 'login.php';

//Connect to server:
$db_server = mysql_connect($db_hostname, $db_username, $db_password);
if	(!$db_server) die ("Unable to connect to MySQL: " . mysql_error() . "<br />");

//Select database:
if (!mysql_select_db($db_database)) die("Unable to select database: " . mysql_error() . "<br />");

//Add some cats:
$query = "INSERT INTO cats VALUES (NULL, 'Lynx', 'Stumpy', 5)";
$result = mysql_query($query);
echo "The Insert ID was: " . mysql_insert_id();
if (!$result) die ("Database access failed: " .mysql_error());
?>