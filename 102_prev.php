<!-- <DIV style="padding:10px 10px; background-color:#2B8ADC; width:300px; float:right; text-align:left;">
<DIV class="info"><a href="http://www.keu.page.kg/" target="_blank">Образовательный портал</a></DIV>
<DIV class="info"><a href="">Расписание</a></DIV>
<DIV class="info"><a href="">Силлабусы</a></DIV>
<DIV class="info"><a href="">Оплата за обучение</a></DIV>
<DIV class="info"><a href="files/students/2015_pamyatka_pervokursnik.pdf" target="_blank">Путеводитель для студента</a></DIV>
<DIV class="info"><a href="">Образцы документов</a></DIV>
</DIV> -->
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
$data_array=$object-> query("SELECT * FROM `keu_students` where `status`='1'  ORDER BY `id`");
//echo "<pre>"; print_r($data_array); echo "</pre>";
if (isset($data_array) AND !empty ($data_array)) {
	?>
	<DIV style="margin-right:30px; padding:10px 10px; background-color:#2B8ADC; width:250px; float:right; text-align:left;">
	<?php
	foreach ($data_array as $key => $value) {
?>
<DIV class="info">
    <a  <?php  
         if (empty($value['link'])) { echo "href=\"index.php?show=102&id=".$value['id']."\""; } 
              else {echo "href=\"".$value['link']."\" target=\"blank\" ";} ?>
     ><?php echo $value['name_'.$lang_current]; ?></a></DIV>


<?php
	} ?>
	 </DIV>
	<?php
	if (isset($_GET['id']) AND !empty($_GET['id'])) { is_int_ ($_GET['id']); 
       echo $data_array[$_GET['id']-1]['text_'.$lang_current];
	
	}
	
}
?>