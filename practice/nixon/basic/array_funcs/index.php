<?php
//Testing various (very useful) array functions.

echo "array:<br>";
$test = array("Robin", 4, "Smith");
print_array($test);

echo "functions:<br>";

//Checks if variable is an array.
echo "is_array(): " . (is_array($test) ? "yes" : "no") . "<br>";

//Counts elements in array.
echo "count(): " . count($test) . "<br><br>";

//Sorts and replaces previous array by sorted one.
echo "sort():<br>";
sort($test);
print_array($test);

//Shuffles array and replaces.
echo "shuffle():<br>";
shuffle($test);
print_array($test);

/* The first argument of explode() is a word-separator symbol.
 * Words could be delimited by e.g. *** instead, so call would be
 * explode('***', "Robin***A.***Smith") for example.
 */
echo "explode():<br>";
$test = explode(' ', "Robin A. Smith");
print_array($test);

$first_name = "Robin";
$middle_name = "A.";
$last_name = "Smith";
//Compact() compacts variables into an array.
echo "compact():<br>";
$test = compact('first_name', 'middle_name', 'last_name');
print_array($test);

//Reset() returns a pointer to the first element of an array.
echo "reset():<br>";
echo "first element: " . reset($test) . "<br><br>";

//End() returns a pointer to the last element of an array.
echo "end():<br>";
echo "last element: " . end($test) . "<br><br>";



function print_array($array)
{
	$j = 0;
	foreach($array as $item)
	{
		echo "array[" . $j++ . "]: $item<br>";
	}
	echo "<br>";
}

?>