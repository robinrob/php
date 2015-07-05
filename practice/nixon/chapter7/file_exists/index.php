<?php
//Using file_exists():
check_file("test.txt");
check_file("test2.txt");
check_file("index.php");

function check_file($file)
{
if (file_exists($file)) {
	echo "File exists<br>";
}
else {
	echo "File doesn't exist<br>";
}
}
?>