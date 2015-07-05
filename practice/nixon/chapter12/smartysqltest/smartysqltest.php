<?php //smartysqltest.php
//The sqltest.php program rewritten for Smarty.
$path = $_SERVER['DOCUMENT_ROOT'];
require "$path/smarty/Smarty.class.php";

$smarty = new Smarty();
$smarty->template_dir	= "$path/temp/smarty/templates";
$smarty->compile_dir	= "$path/temp/smarty/templates_c";
$smarty->cache_dir		= "$path/temp/smarty/cache";
$smarty->config_dir		= "$path/temp/smarty/configs";

require_once("$path/chapter10/login.php");

//Connect to server:
$db_server = mysql_connect($db_hostname, $db_username, $db_password);

//Select database:
mysql_select_db($db_database)
	or die("Unable to select database: " . mysql_error() . "<br />");

if (isset($_POST['author']) &&
	isset($_POST['title']) &&
	isset($_POST['category']) &&
	isset($_POST['year']) &&
	isset($_POST['isbn']))
{
		$author = get_post('author');
		$title = get_post('title');
		$category = get_post('category');
		$year = get_post('year');
		$isbn = get_post('isbn');
		
		if (isset($_POST['delete']) && $isbn != "")
		{
			$query = "DELETE FROM classics WHERE isbn='$isbn'";
	
			if (!mysql_query($query)) {
				echo "DELETE failed: $query<br>" . mysql_error() . "<p>";
			}
		}
else 
{
		$query = "INSERT INTO classics VALUES" . "('$author', '$title', '$category', '$year', '$isbn')";
		
		if (!mysql_query($query, $db_server)) {
			echo "INSERT failed: $query<br />"
			. mysql_error() . "<br /><br />";
		}
}
}

$query = "SELECT * FROM classics";
$result = mysql_query($query);

if (!$result) die ("Database access failed: " . mysql_error());
$rows = mysql_num_rows($result);

for ($j = 0; $j < $rows; ++$j)
{
	$results[] = mysql_fetch_array($result);
}

mysql_close($db_server);

$smarty->assign('results', $results);
$smarty->display("smartysqltest.tpl");

function get_post($var)
{
	return mysql_real_escape_string($_POST[$var]);
}
?>