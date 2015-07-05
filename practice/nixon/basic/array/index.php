<?php
/* Comparing two functions which alter variables
 * in the calling environment. The first returns an array
 * and the second declares its parameters to be global. Both
 * have the same effect.
 */
$names = fix_names1("WILLIAM", "henry", "gatES ");
echo $names[0] . " " . $names[1] . " " . $names[2] . "<br />";
fix_names2("WILLIAM", "henry", "gatES");
echo $names[0] . " " . $names[1] . " " . $names[2];

function fix_names1($n1, $n2, $n3)
{
	$n1 = ucfirst(strtolower($n1));
	$n2 = ucfirst(strtolower($n2));
	$n3 = ucfirst(strtolower($n3));
	return array($n1, $n2, $n3);
}

function fix_names2($n1, $n2, $n3)
{
	global $n1; $n1 = ucfirst(strtolower($n1));
	global $n2; $n2 = ucfirst(strtolower($n2));
	global $n3; $n3 = ucfirst(strtolower($n3));
}
?>