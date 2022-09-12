<?php 
require_once "common_data/config.php";
require_once "common_data/classes/ClassTable.php";
require_once "common_data/classes/ClassTableQuery.php";

$object = new TableQuery;
$data_array=$object-> query("SELECT * FROM `keu_news` where `status`='1'  ORDER BY `id` DESC "); // LIMIT 0, 5
include "news_help_jquery.php";
//include "news_help.php";
//echo "<pre>"; print_r($data_array); echo "</pre>";
?>