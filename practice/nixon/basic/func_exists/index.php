<?php
/* Checking for a function's existence. Useful for making
 * code work on earlier versions of PHP which may not have
 * some functions built-in.
 */
if (function_exists("array_combine"))
{
	echo "Function exists" . "<br />";
}
else {
	echo "Function does not exist - better write our own" . "<br />";
}
//Another useful fuction:
echo "PHP version: " . phpversion() . "<br />";
?>