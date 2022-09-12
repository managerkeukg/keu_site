<STYLE>
.info {
   height:120px;
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
$data_array=$object-> query("SELECT * FROM `keu_partners` where `status`='1'  ORDER BY `id`");
//echo "<pre>"; print_r($data_array); echo "</pre>";
if (isset($data_array) AND !empty ($data_array)) {
     foreach ($data_array as $key => $value)
		 {$new_data_array[$value['id']]=$value;
		 }
     $data_array=$new_data_array;
	?>
	<h4>Партнёры</h4>
	<DIV style="padding:10px 10px; background-color:#2B8ADC; width:300px; float:right; text-align:left;">
	<?php
	foreach ($data_array as $key => $value) {
?>
<DIV class="info">
	<hr>
	<a href="index.php?show=120&id=<?php echo $value['id']; ?>">
	   <DIV style="float:left; padding-right:5px;"><IMG height="100px" src="img/partners/<?php echo $value['photo']; ?>"></IMG></DIV>
	   <?php echo $value['title_'.$lang_current];
          
	   ?>
	</a>
</DIV>


<?php
	} ?>
	 </DIV>
	<?php
	if (isset($_GET['id']) AND !empty($_GET['id'])) { is_int_ ($_GET['id']); 
       ///echo "<DIV style=\"width:100px; padding-left:100px;\"><IMG  height=\"100px\" src=\"img/partners/".$data_array[$_GET['id']]['photo']."\"></IMG></DIV>";
       echo $data_array[$_GET['id']]['text_'.$lang_current];
	
	}
	
}
?>