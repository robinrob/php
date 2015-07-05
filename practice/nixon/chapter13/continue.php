<?php //continue.php
//Retrieving session variables.
session_start();

if (isset($_SESSION['username']))
{
	$username = $_SESSION['username'];
	$password = $_SESSION['password'];
	$forename = $_SESSION['forename'];
	$surname = $_SESSION['surname'];
	
	destroy_session_and_data();
	
	echo "Welcome back $forename.<br />
		 Your full name is $forename $surname.<br />
		 Your username is '$username'
		 and your password is '$password'.";
}
else echo "Please <a href=authenticate2.php>click here</a> to log in.";

//Destroying the session:
function destroy_session_and_data()
{
	$_SESSION = array();
	if (session_id() != "" || isset($_COOKIE[session_name()]))
		setcookie(session_name(), '', time() - 2592000, '/');
		session_destroy();
}
?>