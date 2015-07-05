<?php //sessiontest.php
//A session susceptible to session fixation.
session_start();

if (!isset($_SESSION['count'])) $_SESION['count'] = 0;
else ++$_SESSION['count'];
echo $_SESSION['count'];
?>