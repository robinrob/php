<?php //index.php
//Updating a file with file locking.

//Creating the file:
$file = fopen("test.txt", 'w') or die("Failed to create file<br>");
$text = <<<_END
This is line 1.
This is line 2.
This is line 3.

_END;
fwrite($file, $text);
fclose($file);

//Updating the file:
$file = fopen("test.txt", 'r+') or die ("Failed to open file");
$text = fgets($file);

if (flock($file, LOCK_EX))
{
	fseek($file, 0, SEEK_END);
	fwrite($file, "$text") or die("Could not write to file");
	flock($file, LOCK_UN);
}
fclose($file);
echo "File 'test.txt' successfully updated";
?>