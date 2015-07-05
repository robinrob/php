<?php
//Using the date() function:
echo date("1 F jS Y - g:ia", time());
echo "<br>";

//Using checkdate():
$month = 9;
$day = 31;
$year = 2012;

if (checkdate($month, $day, $year)) echo "Date is valid";
else echo "Date is invalid.";
?>