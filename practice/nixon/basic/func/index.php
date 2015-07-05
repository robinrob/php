<?php
//Demonstrating functions.

function longdate($timestamp)
{
    return date("1 F jS Y", $timestamp);
}

echo "date: " . longdate(2) . "\n";
?>
