<?php
if (isset($_GET['lang']) AND !empty($_GET['lang']))
{
	//@header("Location:main/index.php");
	if ($_GET['lang']=="ru" OR $_GET['lang']=="eng" OR $_GET['lang']=="kg")
	{
	  setcookie("lang", $_GET['lang']);
	  //echo $_GET['url'];
	  //@header("Location:index.php"); 
	  ///$url= str_replace('{', '&', $_GET['url']);
	  ///@header("Location: ".$url." ");
	  @header("Location:index.php");
	} else {exit("Недопустимый формат URL-запроса. Хакерство преследуется законом.");}	 
}
?>