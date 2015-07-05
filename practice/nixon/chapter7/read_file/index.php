<?php
//Reading a file with fgets() and fread().

$file = fopen("../write_file/test.txt", 'r');

//fgets():
$line = fgets($file);
echo $line;
$line = fgets($file);
echo $line;

//fread():
$line = fread($file, 5);
echo $line;
?>