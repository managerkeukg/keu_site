<STYLE>
.info {
   padding:10px 0px;
}
.sub_info {
   padding:10px 30px;
}
.info a {
  color:white;
}
.sub_info a {
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
$data_array=$object-> query("SELECT * FROM `keu_science` where `status`='1'  ORDER BY `id`");
///echo "<pre>"; print_r($data_array); echo "</pre>";
   foreach ($data_array as $key => $value)
			{
				$parented_array[$value['parent']][$value['id']]['data']=$value;
				$new_array_id[$value['id']]=$value;
			} 
///echo "<pre> parented "; print_r( $parented_array); echo "</pre>";
function get_sub ($array, $parent, $array_name, $lang_current) {
   ///*
   foreach ($array as $key =>$value)
	{
	   if ($parent==$value['parent'])
		   {
		      $link_url="";   if (empty($value['link'])) { $link_url="index.php?show=203&id=".$value['id']; } 
              else { $link_url=$value['link']." \" target=\"_blank ";}
		   echo "<DIV class=\"sub_info\"><a href=\"".$link_url."\">".$array_name[$value['id']]['name_'.$lang_current];
		   $sub_array[$value['id']]=get_sub ($array, $value['id'], $array_name, $lang_current);
		     echo "</a></DIV>";
		   }
	}
	if (isset($sub_array) AND !empty($sub_array)) {return $sub_array;} else {return "";}
	//*/
}

 if (isset($data_array) AND !empty ($data_array)) {  /// echo "<pre> parented "; print_r( $parented_array); echo "</pre>";
	?>
	    <DIV style="padding:10px 10px; background-color:#2B8ADC; width:300px; float:right; text-align:left;">
		  <DIV style="width:300px; float:right;">
            <?php
				//echo "<div>"; ///echo "<ul>";
				foreach($parented_array['0'] as $key=>$value) {
					$link_url="";   if (empty($new_array_id[$key]['link'])) { $link_url="index.php?show=203&id=".$key; } 
                     else { $link_url=$new_array_id[$key]['link']." \" target=\"_blank ";}
					 echo "<DIV class=\"info\"><a href=\"".$link_url."\">".$new_array_id[$key]['name_'.$lang_current].""; ///echo "<li>$key";
					$subordered[$key]= get_sub ($data_array, $key, $new_array_id, $lang_current);
					echo "</a></DIV>"; ///echo "</li>";
				}
				//echo "</div>"; ///echo "</ul>";
			?>
		  </DIV>
        </DIV>
	<?php
	if (isset($_GET['id']) AND !empty($_GET['id'])) { is_int_ ($_GET['id']); 
          //echo "<pre>"; print_r($new_array_id); echo "</pre>";
         echo "<DIV style=\"padding-left:20px; padding-right:340px; \" >".$new_array_id[$_GET['id']]['text_'.$lang_current]."</DIV>";
	}
}
?>