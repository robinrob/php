<?php
//Control statements
$day_number = 337;
$days_to_new_year = 366 - $day_number; //Expression
if ($days_to_new_year < 30)
{
	echo "Not long now till new year!"; //Statement
}
else
{
	echo "There are " . $days_to_new_year . " days left to new year <br />";
}
?>