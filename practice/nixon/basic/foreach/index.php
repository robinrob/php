<?php
//Walking through a numeric array using foreach...as

$paper = array("Copier", "Inkjet", "Laser", "Photo");
$j = 0;

foreach($paper as $item)
{
	echo "$j: $item<br>";
	++$j;
}

//Walking through an associative array using foreach...as

$paper = array('copier'	=> "Copier & Multipurpose",
			   'inkjet'	=> "Inkjet Printer",
			   'laser' 	=> "Laser Printer",
			   'photo'	=> "Photographic Printer");

echo "<br>";
foreach($paper as $item => $description)
{
	echo "$item: $description<br>";
}
?>