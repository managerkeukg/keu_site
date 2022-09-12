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
	
	require_once "common_data/functions/f_xml2array.php";
	$frontpage_settings = file_get_contents("kel_data_admin/xml/frontpage.xml");
	$xml_array_frontpage = simplexml_load_string($frontpage_settings);
	$array_frontpage_xml= array();
	$array_frontpage_xml= xml2array($xml_array_frontpage);

require_once "common_data/config.php";
require_once "common_data/functions/f_is_int.php";
require_once "common_data/classes/ClassTable.php";
require_once "common_data/classes/ClassTableQuery.php";

$object = new TableQuery;
$data_array=$object-> query("SELECT * FROM `keu_studentam` where `status`='1'  ORDER BY `id`");
//echo "<pre>"; print_r($data_array); echo "</pre>";
if (isset($data_array) AND !empty ($data_array)) {
	?>
	<DIV style="padding:10px 10px; background-color:#2B8ADC; width:300px; float:right; text-align:left;">
	<?php
	   foreach ($data_array as $key => $value)
	{
		$new_array[$value['order']]=$value;
		$new_data_array[$value['id']]=$value;
	} 
	require_once "common_data/functions/f_sort_array_keys.php";
	$ordered_array=sort_array_keys ($new_array);
    //echo "<pre>"; print_r($ordered_array); echo "</pre>";

	foreach ($ordered_array as $key => $value) {
		$link_url="";   if (empty($value['link'])) { $link_url="index.php?show=202&id=".$value['id']; } 
              else { $link_url=$value['link']." \" target=\"_blank ";}
?>
<DIV class="info"><a href="<?php echo $link_url; ?>"><?php echo $value['name_'.$lang_current]; ?></a></DIV>
<?php
	} ?>
	 </DIV>
	<?php
	if (isset($_GET['id']) AND !empty($_GET['id'])) { is_int_ ($_GET['id']); 
       if (isset($new_data_array[$_GET['id']]) AND !empty($new_data_array[$_GET['id']])) {
		   echo "<DIV style=\"padding-left:20px; padding-right:340px; \" >".$new_data_array[$_GET['id']]['text_'.$lang_current]."</DIV>";
	   }
	}
	
}
?>