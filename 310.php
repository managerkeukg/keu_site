<?php
require_once "common_data/config.php";
require_once "common_data/functions/f_is_int.php";
require_once "common_data/classes/ClassTable.php";
require_once "common_data/classes/ClassTableQuery.php";

if (isset($_GET['id']) AND !empty($_GET['id'])) { 
	is_int_ ($_GET['id']); 
	$menu_id=$_GET['id']; 
} else {
	$menu_id = 1;
}

$center_name = "";
if ($lang_current=="ru") {
	$center_name = "Центр компетенций по упрощению процедур торговли.";
} elseif ($lang_current=="kg") {
	$center_name = "Соодага көмөктөшүү боюнча компетенттүү борбор.";
} elseif ($lang_current=="eng") {
	$center_name = "Competence Center for Trade Facilitation.";
}
echo "<H3 style=\"text-align: center;\">".$center_name."</H3>";

$object = new TableQuery;
$object -> order_by_field = "id";
$data_array=$object-> query("SELECT * FROM `keu_center_competence` where `status`='1'  ORDER BY `id`");
	
if (isset($data_array) AND !empty ($data_array)) {
	//echo "<pre>"; print_r($data_array); echo "</pre>";
	echo "<div style=\"clear:both;\">";
		foreach ($data_array as $key => $value) {
			if (!empty($value['link'])) {
				$link = $value['link'];
				$target = "_blank";
			} else {
				$link = "index.php?show=310&id=".$value['id'];
				$target = "";
			}
			if ($value['id'] == 1) {
				
			} else {
				echo "<a href=\"".$link."\" target=\"".$target."\">
					<div class=\"div_menu\">
					".$value['title_'.$lang_current]."
					</div>
				</a>";
			}
			
		}
	echo "</div>";
}


?>
<div style="clear:both; padding: 10px 10px;">
	<h3 style="text-align: center;"><?php echo $data_array[$menu_id]['title_'.$lang_current] ?></h3>
	<?php echo $data_array[$menu_id]['text_'.$lang_current] ?>
</div>
<style type="text/css">
.div_menu {
	float:left;
	width: 15%;
	height: 70px;
	background-color: blue;
	text-align: center;
	margin: 5px 10px;
	padding: 20px 20px;
	color: white;
}
</style>