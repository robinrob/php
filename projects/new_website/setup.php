<?php //setup.php
//Create the data tables for mrrobinsmith.co.uk
include_once "functions.php";

if (!tableExists(photos))
{
	createTable("photos", "image VARCHAR(32),
						   type VARCHAR(16),
						   date VARCHAR(16),
						   location VARCHAR(32)");
}
$query = "INSERT INTO photos VALUES ('103_small.JPG', 'animals', '01/01/01', 'Vancouver')";
?>