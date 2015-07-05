<?php
//Demonstrating different ways of handling multi-line data

$author = "Robin A. Smith";

echo "This is a Headline

This is the first line.
This is the second.
Written by $author.\n";

echo <<<_END

This is a Headline

This is the first line.
This is the second.
Written by $author.\n
_END;

$out = <<<_END

This is a Headline

This is the first line.
This is the second.
Written by $author.\n
_END;
echo "\nout: $out\n";
?>
