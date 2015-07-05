<?php //cats.php
//Creates a table called 'cats' and inserts data into it.
require_once 'login.php';

//Connect to server:
$db_server = mysql_connect($db_hostname, $db_username, $db_password);
if	(!$db_server) die ("Unable to connect to MySQL: " . mysql_error() . "<br />");

//Select database:
if (!mysql_select_db($db_database)) die("Unable to select database: " . mysql_error() . "<br />");

$query = "CREATE TABLE cats (
	id SMALLINT NOT NULL AUTO_INCREMENT,
	family VARCHAR(32) NOT NULL,
	name VARCHAR(32) NOT NULL,
	age TINYINT NOT NULL,
	PRIMARY KEY(id)
	)";

$result = mysql_query($query);
if (!$result) die ("Database access failed: " .mysql_error());
?>