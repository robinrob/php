<?php //index.php
//Different ways of using fseek().

//Creating the file:
$file = fopen("test.txt", 'w');
$text = <<<_END
This is line 1.
This is line 2.
This is line 3.

_END;
fwrite($file, $text);
fclose($file);

//SEEK_END:
$file = fopen("test.txt", 'r+');
//Goes 8 positions backwards from end of file.
fseek($file, -8, SEEK_END);
echo fgets($file) . "<br>";
fclose($file);

//SEEK_SET:
$file = fopen("test.txt", 'r+');
//Goes to position 8 in the file.
fseek($file, 8, SEEK_SET);
echo fgets($file) . "<br>";
?>