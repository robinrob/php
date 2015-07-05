<?php //urlpost.php
if (isset($_GET['url'])) {
	echo file_get_contents("http://".sanitiseString($_GET['url']));
}

function sanitiseString($var)
{
	$var = strip_tags($var);
	$var = htmlentities($var);
	return stripslashes($var);
}
?>
