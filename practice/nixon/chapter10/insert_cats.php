<?php //insert_cats.php
//Inserts some cats into the 'cats' table.
require_once 'login.php';

//Connect to server:
$db_server = mysql_connect($db_hostname, $db_username, $db_password);
if	(!$db_server) die ("Unable to connect to MySQL: " . mysql_error() . "<br />");

//Select database:
if (!mysql_select_db($db_database)) die("Unable to select database: " . mysql_error() . "<br />");

//Add some cats:
$query = "INSERT INTO cats VALUES
		  (NULL, 'Lion', 'Leo', 4),
		  (NULL, 'Cougar', 'Growler', 4),
		  (NULL, 'Cheetah', 'Charly', 4)";
$result = mysql_query($query);
if (!$result) die ("Database access failed: " .mysql_error());
?>