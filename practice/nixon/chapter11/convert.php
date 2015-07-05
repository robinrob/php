<?php //convert.php
//A program to convert values between Fahrenheit and Celcius.
$f = $c = "";

if (isset($_POST['f'])) $f = sanitiseString($_POST['f']);
if (isset($_POST['c'])) $f = sanitiseString($_POST['c']);

if ($f != '')
{
	$c = intval((5 / 9)) * ($f - 32);
	$out = "$f F equals $c C";
}
else if ($c != '')
{
	$f = intval((9 / 5) * $c + 32);
	$out = "$c C equals $f F";
}
else $out = "";


echo <<<_END
<html><head><title>Temperature Converter</title>
</head>
<body><pre>
Enter either Fahrenheit or Celcius and click on Convert

<b>$out</b>
<form method="post" action="convert.php">
Fahrenheit <input type="text" name="f" size="7" />
   Celcius <input type="text" name="c" size="7" />
   		   <input type="submit" value="Convert" />
</form></pre></body></html>
_END;

function sanitiseString($var)
{
	$var = stripslashes($var);
	$var = htmlentities($var);
	$var = strip_tags($var);
	return $var;
}
?>