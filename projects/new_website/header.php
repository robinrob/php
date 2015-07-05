<?php //header.php
//This is the top part of each page.
include 'functions.php';

echo <<<_END
<html>
<head>
<title>mrrobinsmith.co.uk</title>
<link type="text/css" rel="stylesheet" href="style.css">
</head>

<body>
<div id="page-background">
<img src="images/me_on_half_dome_1280.jpg" width="100%" height="100%" alt="Background picture">
</div>

<div id="content">

<h1>Welcome to mrrobinsmith.co.uk!</h1>

<div id="link-menu">
<ul>
<li><a href="index.php">home</a></li>
<li><a href="photos.php">photos</a></li>
<li><a href="astronomy.php">astronomy</a></li>
<li><a href="programming.php">programming</a></li>
<li><a href="writing.php">writing</a></li>
<li><a href="contact.php">contact</a></li>
</ul>
</div>
_END
?>
