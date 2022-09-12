<?php
if (empty($_COOKIE['lang']))
{
	//@header("Location:main/index.php");
	setcookie("lang","ru");	
	$lang_current="ru";
} else {
$lang_current=$_COOKIE['lang']; }
?>