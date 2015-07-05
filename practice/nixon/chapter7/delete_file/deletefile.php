<?php //deletefile.php
//Deleting a file

copy("../write_file/test.txt", "test.txt");

if (!unlink("test.txt")) echo "Could not delete file";
else echo "'File test.txt' successfully deleted";
?>