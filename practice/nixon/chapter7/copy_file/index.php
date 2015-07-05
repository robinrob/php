<?php
//Copying a file.

copy("../write_file/test.txt", "test1.txt") or die("Could not copy file<br>");
echo "File copied successfully<br>";

//or:
if(!copy("../write_file/test.txt", "test2.txt")) echo "Could not copy file<br>";
else echo "File copied successfully<br>";
?>