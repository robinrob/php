<script>
checkerboard = Array(
	Array(' ', 'o', ' ', 'o', ' ', 'o', ' ', 'o'),
	Array('o', ' ', 'o', ' ', 'o', ' ', 'o', ' '),
	Array(' ', 'o', ' ', 'o', ' ', 'o', ' ', 'o'),
	Array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
	Array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
	Array('O', ' ', 'O', ' ', 'O', ' ', 'O', ' '),
	Array(' ', 'O', ' ', 'O', ' ', 'O', ' ', 'O'),
	Array('O', ' ', 'O', ' ', 'O', ' ', 'O', ' '))

document.write("<pre>")
for (j = 0 ; j < 8 ; ++j)
{
	for (k = 0 ; k < 8 ; ++k)
		document.write(checkerboard[j][k] + " ")
	document.write("<br />")
}
document.write("</pre>")
</script>