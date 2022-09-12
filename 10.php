<?php 
require_once "common_data/config.php";
require_once "common_data/classes/ClassTableQuery.php";

require_once "kel_data_admin/functions/f_is_int.php";
is_int_obligatory ($_GET['id']);

$id=$_GET['id'];

$object = new TableQuery;
$data_array_article=$object-> query("SELECT * FROM `keu_articles` where `status`='1'AND `id`=$id "); // LIMIT 0, 5
//echo "<pre>"; print_r($data_array_article); echo "</pre>";
if (isset($data_array_article) AND !empty($data_array_article))
{
	echo $data_array_article['0']['text_'.$lang_current];
}
?>