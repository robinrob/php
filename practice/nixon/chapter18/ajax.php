<?php //ajax.php
//A cross-browser Ajax function

echo <<<_END
<script>
function ajaxRequest()
{
	try // Non IE Browser?
	{
		var request = new XMLHttpRequest()
	}
	catch(e1)
	{
		try // IE 6++?
		{
			request = newActiveXObject("Msxml2.XMLHTTP")
		}
		catch(e2) // There is no Ajax Support
		{
			request = alse
		}
	}
	return request
}
</script>
_END
?>