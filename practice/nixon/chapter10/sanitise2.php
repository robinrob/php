<?php //sanitise2.php
//How to safely acess MySQL and prevent XSS attacks.
$user = mysql_entities_fix_string($_POST['user']);
$pass = mysql_entities_fix_string($_POST['pass']);
$query = "SELECT * FROM users WHERE user='$user' AND pass='$pass'";

//Functions for preventing both SQL and XSS injection attacks:
function mysql_entities_fix_string($string)
{
	return htmlentities(mysql_fix_string($string));
}

function mysql_fix_string($string)
{
	if (get_magic_quotes_gpc()) $string = stripslashes($string);
	return mysql_real_escape_string($string);
}
?>