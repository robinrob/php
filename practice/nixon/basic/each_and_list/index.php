<?php
//Walking through an associative array using each and list functions.

$paper = array('copier'	=> "Copier & Multipurpose",
			   'inkjet'	=> "Inkjet Printer",
			   'laser' 	=> "Laser Printer",
			   'photo'	=> "Photographic Printer");

while (list($item, $description) = each($paper))
	echo "$item: $description<br>";
	
?>