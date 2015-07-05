<?php //index.php
//Using file get contents.

//Creating the file:
$file = fopen("test.txt", 'w') or die("Failed to create file<br>");
$text = <<<_END
This is line 1.
This is line 2.
This is line 3.

_END;
fwrite($file, $text);
fclose($file);

//Getting the entire contents of the file without using file handles!
echo "<pre>";
echo file_get_contents("test.txt");
echo file_get_contents("http://mrrobinsmith.co.uk");
echo "</pre>";
?>