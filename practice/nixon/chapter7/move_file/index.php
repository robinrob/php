<?php //index.php
//Moving a file
if (!rename('test.txt', 'test_new.txt'))
	echo "Could not rename file";
else echo "FIle successfully renamed to 'test_new.txt'";
?>
