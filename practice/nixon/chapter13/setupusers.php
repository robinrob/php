<?php //setupusers.php
$path = $_SERVER['DOCUMENT_ROOT'];
require_once("$path/chapter10/login.php");

//Connect to server:
$db_server = mysql_connect($db_hostname, $db_username, $db_password);
if	(!$db_server) die ("Unable to connect to MySQL: " . mysql_error() . "<br />");

//Select database:
mysql_select_db($db_database)
	or die("Unable to select database: " . mysql_error() . "<br />");
	
$query = "CREATE TABLE users (
			forename VARCHAR(32) NOT NULL,
			surname VARCHAR(32) NOT NULL,
			username VARCHAR(32) NOT NULL UNIQUE,
			password VARCHAR(32) NOT NULL
			)";

$result = mysql_query($query);
if (!$result) die ("Database access failed: " .mysql_error());

$salt1 = "qm&h*";
$salt2 = "pg!@";

$forename = 'Bill';
$surname = 'Smith';
$username = 'bsmith';
$password = 'mysecret';
$token = md5("$salt1$password$salt2");
add_user($forename, $surname, $username, $token);

$forename	= 'Pauline';
$surname	= 'Jones';
$username	= 'pjones';
$password = 'acrobot';
$token = md5("$salt1$password$salt2");
add_user($forename, $surname, $username, $token);

function add_user($fn, $sn, $un, $pw)
{
	$query = "INSERT INTO users VALUES('$fn', '$sn', '$un', '$pw')";
	$result = mysql_query($query);
	if (!$result) die ("Database access failed: " .mysql_error());
}
?>