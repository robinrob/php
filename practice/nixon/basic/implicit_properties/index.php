<?php
//Defining a property implicity (fucked!)

$object = new User;
$object->name = "Alice";
echo "name: " . $object->name;

class User {};

?>