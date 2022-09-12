<?php
require_once "common_data/config.php";
require_once "common_data/functions/f_is_int.php";
require_once "common_data/classes/ClassTableQuery.php";
require_once "common_data/functions/get_array.php";
if (isset($_GET['id'])) {is_int_obligatory ($_GET['id']);} else { exit("Недопустимый формат URL-запроса. Хакерство преследуется законом"); }
$id=$_GET['id'];

$object_who_is= new TableQuery;

$array_whois=$object_who_is->query ("SELECT * from `keu_who_is` where `status`='1' AND `id`=$id");
//echo "<pre>"; print_r($array_whois); echo "</pre>"; 
echo $array_whois[0]['ru_text'];

/*
$array_whois=$object_who_is->query ("SELECT * from `keu_who_is` where `status`='1'");
//echo "<pre>"; print_r($array_whois); echo "</pre>";
foreach ($array_whois as $key=>$value) {
	$j=$key+1;
	echo "<BR><a href=\"index.php?show=6&id=".$j."\"  target=\"_blank\">".$value['ru_title']." </a>";
}
//echo $array_whois[0]['ru_text'];
*/
?>

			