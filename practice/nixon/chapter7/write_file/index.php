<?php
//Creating a simple text file.

$file = fopen("test.txt", 'w') or die("Failed to create file<br>");
$text = <<<_END
Hello
i am
Robin Smith

_END;
fwrite($file, $text) or die("Could not write to file<br>");
fclose($file);
echo "File 'test.txt' written successfully<br>";
?>