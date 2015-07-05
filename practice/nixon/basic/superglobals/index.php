<?php
/* Some of the entries in the _SERVER superglobal variable.
 * The function htmlentities() can be used to hide the output
 * from hackers.
 */

echo "PHP_SELF: " . htmlentities($_SERVER['PHP_SELF']) . "<br />";
echo "GATEWAY_INTERFACE: " . $_SERVER['GATEWAY_INTERFACE'] . "<br />";
echo "SERVER_ADDR: " . $_SERVER['SERVER_ADDR'] . "<br />";
echo "SERVER_NAME: " . $_SERVER['SERVER_NAME'] . "<br />";
echo "SERVER_SOFTWARE: " . $_SERVER['SERVER_SOFTWARE'] . "<br />";
echo "SERVER_PROTOCOL: " . $_SERVER['SERVER_PROTOCOL'] . "<br />";
echo "REQUEST_METHOD: " . $_SERVER['REQUEST_METHOD'] . "<br />";
?>