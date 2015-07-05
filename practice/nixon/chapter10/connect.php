<?php
require_once 'login.php';

//Connect to server:
$db_server = mysql_connect($db_hostname, $db_username, $db_password);
if ($db_server) echo "Connected to server!<br />";
else die ("Unable to connect to MySQL: " . mysql_error() . "<br />");
?>