<?php //xmlget.php
if (isset($_GET['url'])) {
	header('Content-Type: text/xml');
	echo file_get_contents("http://".sanitiseString($_GET['url']));
}

function sanitiseString($var)
{
	$var = strip_tags($var);
	$var = htmlentities($var);
	return stripslashes($var);
}
?>