<?php //checkuser.php
include_once 'functions.php';

if (isset($_POST['user']))
{
	$user = sanitiseString($_POST['user']);
	$query = "SELET * FROM members WHERE user='$user'";
	
	if (mysql_num_row(queryMysql($query)))
		echo "<font color=red>&nbsp;&larr;
			Sorry, already taken</font>";
	else echo "<font color=green>&nbsp;&larr;
			Username available</font>";
}
?>