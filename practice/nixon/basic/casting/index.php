<?php
//Two methods of casting (implicit and explicit).
$a = 56;
$b = 12;
$c = $a / $b;
echo "a / b:         " . $c 		 . "<br />";
echo "(int) (a / b): " . (int) $c	 . "<br />";
echo "intval(a / b): " . intval($c)  . "<br />";
