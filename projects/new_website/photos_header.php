<?php //photos_header.php
//Top part of each photos page.
require_once 'header.php';

if (isset($_GET['view']))
{
	$view = ucwords(sanitiseString($_GET['view']));
	echo "<h1>Photos - $view</h1>";
}
else 
{
	echo "<h1>Photos</h1>";
}

echo <<<_END
<div id="mainbox">

<div id="link-submenu">
<ul>
<li><a href="photos.php?view=sunrises">sunrises</a></li>
<li><a href="photos.php?view=sunsets">sunsets</a></li>
<li><a href="photos.php?view=mountains and valleys">mountains & valleys</a></li>
<li><a href="photos.php?view=cities">cities</a></li>
<li><a href="photos.php?view=beaches and oceans">beaches & oceans</a></li>
<li><a href="photos.php?view=trees and plants">trees & plants</a></li>
<li><a href="photos.php?view=animals">animals</a></li>
</ul>
</div>

</div>
_END;
?>