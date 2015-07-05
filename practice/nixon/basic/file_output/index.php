<?php
//Writing data to a file
$fp = fopen("text.txt", 'wb');

for ($j = 0; $j < 100; ++$j)
{
	$written = fwrite($fp, "data\n");
	if ($written == FALSE) break;
}

fclose($fp);
?>