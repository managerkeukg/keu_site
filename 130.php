<STYLE>
.info {
   height:200px;
   padding-top:10px;
}
.info a {
  color:white;
}
</STYLE>

<?php 
require_once "common_data/config.php";
require_once "common_data/functions/f_is_int.php";
require_once "common_data/classes/ClassTable.php";
require_once "common_data/classes/ClassTableQuery.php";

$object = new TableQuery;
$data_array=$object-> query("SELECT * FROM `keu_achievements` where `status`='1'  ORDER BY `id`");
//echo "<pre>"; print_r($data_array); echo "</pre>";
if (isset($data_array) AND !empty ($data_array)) {
	?>
	<DIV style="padding:10px 10px; background-color:#2B8ADC; width:300px; float:right; text-align:left;">
	<?php
	foreach ($data_array as $key => $value) {
?>
<DIV class="info">
	<hr>
	<a href="index.php?show=130&id=<?php echo $value['id']; ?>">
	   <IMG width="100px" src="img/achievements/<?php echo $value['photo']; ?>"></IMG><BR>
	   <?php echo $value['title_'.$lang_current]; ?>
	</a>
</DIV>


<?php
	} ?>
	 </DIV>
	<?php
	if (isset($_GET['id']) AND !empty($_GET['id'])) { is_int_ ($_GET['id']); 
       echo "<DIV style=\"width:250px; padding-left:100px;\"><IMG  width=\"250px\" src=\"img/achievements/".$data_array[$_GET['id']-1]['photo']."\"></IMG></DIV>";
       echo $data_array[$_GET['id']-1]['text_'.$lang_current];
	
	}
	
}
?>