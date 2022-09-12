<STYLE>
.info {
   clear:both;
   padding-top:10px;
}
.info a {
  color:blue;
  font-size:12px;
}
</STYLE>

<?php 
require_once "common_data/config.php";
require_once "common_data/functions/f_is_int.php";
require_once "common_data/classes/ClassTable.php";
require_once "common_data/classes/ClassTableQuery.php";

$object = new TableQuery;
$data_array=$object-> query("SELECT * FROM `keu_calendar` where `status`='1'  ORDER BY `id`");
//echo "<pre>"; print_r($data_array); echo "</pre>";
if (isset($data_array) AND !empty ($data_array)) {
	foreach ($data_array as $key=>$value) {
		$new_array[$value['id']]= $value;
	    
	}
	rsort($new_array);
	foreach ($new_array as $key=>$value) {
		$new2_array[$value['id']]= $value;
	    
	}
	//echo "<pre>"; print_r ($new2_array); echo "<pre>";
    $data_array=$new2_array;
	?>
	<DIV style="padding:10px 10px;  width:300px; float:right; text-align:left;">  <!-- background-color:#2B8ADC; -->
	<?php
	foreach ($data_array as $key => $value) {
?>
<DIV class="info">
	<hr>
	<a href="index.php?show=110&id=<?php echo $value['id']; ?>">
	   <DIV style="float:left; "><IMG width="100px" src="img/calendar/<?php echo $value['photo']; ?>"></IMG></DIV>
	   <DIV style="font-size:12px; padding-left:115px;"><?php echo $value['title_'.$lang_current]; ?></DIV>
	</a>
</DIV>


<?php
	} ?>
	 </DIV>
	<?php
	if (isset($_GET['id']) AND !empty($_GET['id'])) { is_int_ ($_GET['id']); 
       ///echo "<DIV style=\"width:250px; padding-left:100px;\"><IMG  width=\"250px\" src=\"img/calendar/".$data_array[$_GET['id']]['photo']."\"></IMG></DIV>";
	  ?>
	  <DIV style="padding-left:20px;">
		  <?php
		   echo $data_array[$_GET['id']]['text_'.$lang_current];
		  ?>
	  </DIV>
	  <?php
	}
	
}
?>