<?php //photos.php
require_once "photos_header.php";

if (isset($_GET['view'])) $view = sanitiseString($_GET['view']);

else $view = "home";

if ($view != "")
{
	echo "view parameter: $view<br />";
	echo <<<_END
<p>$view content goes here.</p>
</div></body></html>
_END;
}
?>
