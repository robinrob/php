<?php //urlpost.php
if (isset($_POST['url'])) {
	echo file_get_contents("http://".sanitiseString($_POST['url']));
}

function sanitiseString($var)
{
	$var = strip_tags($var);
	$var = htmlentities($var);
	return stripslashes($var);
}
?>
