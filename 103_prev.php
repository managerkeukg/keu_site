<STYLE>
.info {
   height:30px;
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
$data_array=$object-> query("SELECT * FROM `keu_science` where `status`='1'  ORDER BY `id`");
//echo "<pre>"; print_r($data_array); echo "</pre>";
if (isset($data_array) AND !empty ($data_array)) {
	?>
	<DIV style="padding:10px 10px; background-color:#2B8ADC; width:300px; float:right; text-align:left;">
	<?php
	foreach ($data_array as $key => $value) {
?>
<DIV class="info"><a href="index.php?show=103&id=<?php echo $value['id']; ?>"><?php echo $value['name_'.$lang_current]; ?></a></DIV>


<?php
	} ?>
	 </DIV>
	<?php
	if (isset($_GET['id']) AND !empty($_GET['id'])) { is_int_ ($_GET['id']); 
       echo $data_array[$_GET['id']-1]['text_'.$lang_current];
	
	}
	
}
?>