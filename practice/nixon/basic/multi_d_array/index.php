<?php
//Creating a multidimensional associative array.

$products = array(
	'paper' => array(
		'copier'	=> "Copier & Multipurpose",
		'inkjet'	=> "Inkjet Printer",
		'laser'		=> "Laser Printer",
		'photo'		=> "Photographic Printer"),
	
	'pens' => array(
		'ball'		=> "Ball Pointer",
		'hilite'	=> "Highlighters",
		'marker'	=> "Markers"),

	'misc' => array(
		'tape'		=> "Sticky Tape",
		'glue'		=> "Adhesives",
		'clips'		=> "Paperclips"));

//<pre></pre> tags PRESERVE formatting when code is converted into html.
echo "<pre>";
foreach($products as $section => $items)
	foreach($items as $key => $value)
		echo "$section:\t$key\t($value)<br>";
echo "</pre>";

$chessboard = array(
	array('r', 'n', 'b', 'q', 'k', 'b', 'n', 'r'),
	array('p', 'p', 'p', 'p', 'p', 'p', 'p', 'p'),
	array('_', '_', '_', '_', '_', '_', '_', '_'),
	array('_', '_', '_', '_', '_', '_', '_', '_'),
	array('_', '_', '_', '_', '_', '_', '_', '_'),
	array('_', '_', '_', '_', '_', '_', '_', '_'),
	array('P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'),
	array('R', 'N', 'B', 'Q', 'K', 'B', 'N', 'R'));
	
echo "<pre>";
foreach($chessboard as $line) {
	foreach($line as $square)
		echo "$square ";
	echo "<br>";
}
echo "</pre>";
?>

