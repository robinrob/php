<?php
//Demonstrating use of constants

define("BOLLOCKS", "A bollocks constant\n");
echo "BOLLOCKS: " . BOLLOCKS;

//Magic constants: __LINE__, __FILE__, __DIR__, __CLASS__, __METHOD__, __FUNCTION__, __NAMESPACE__
echo "Also this is line " . __LINE__ . " of file " . __FILE__ . "\n";
?>
