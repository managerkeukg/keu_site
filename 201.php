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
require_once "common_data/classes/ClassDivs.php";
require_once "common_data/classes/ClassTables.php";

$object = new TableQuery;
$data_array=$object-> query("SELECT * FROM `keu_abiturients` where `status`='1'  ORDER BY `id`");
//echo "<pre>"; print_r($data_array); echo "</pre>";
if (isset($data_array) AND !empty ($data_array)) {
	   foreach ($data_array as $key => $value)
		{
			$new_array[$value['order']]=$value;
			$new_data_array[$value['id']]=$value;
		} 
		require_once "common_data/functions/f_sort_array_keys.php";
		$ordered_array=sort_array_keys ($new_array);
		///echo "<pre>"; print_r($ordered_array); echo "</pre>";
		///echo "<pre>new_data "; print_r($new_data_array); echo "</pre>";
	?>
	<TABLE width="98%" border="0">
	<TR><TD width="75%">
				<?php
				if (isset($_GET['id']) AND !empty($_GET['id'])) { is_int_ ($_GET['id']); $id_type_abit=$_GET['id'];
				   if (isset($new_data_array[$id_type_abit]) AND !empty($new_data_array[$id_type_abit])) {
					   //echo  $new_data_array[$id_type_abit]['edu_type'];
					   $edu_type=$new_data_array[$id_type_abit]['edu_type'];
			$query2="SELECT * FROM `keu_profiles` WHERE `edu_type`='".$edu_type."' "; //AND `status`='1' ORDER BY `id`
			//echo $query2;
						$object_profiles = new TableQuery;
						$array_profiles=$object_profiles-> query($query2);
						///echo "<pre>Profiles"; print_r($array_profiles); echo "</pre>";
						
						$object_specialities = new TableQuery;
						$array_specialities=$object_specialities-> query("SELECT * FROM `keu_type_specialities` WHERE  `status`='1' ORDER BY `id`");
						///echo "<pre>Array Spec"; print_r($array_specialities); echo "</pre>";
						
						foreach ($array_specialities as $key=>$value) {$new_array_specialities[$value['id']]=$value;}
                        $array_specialities=$new_array_specialities;
						if (isset($array_profiles) AND !empty ($array_profiles)) {
							///echo "<pre>"; print_r($array_profiles); echo "</pre>";							
                          $array_divs=""; $array_tables="";
						  foreach ($array_profiles as $key=>$value) {
							$array_divs['data'][]= "Направление: <BR><BR>".$array_specialities[$value['speciality']]['name_'.$lang_current]."<BR><BR><BR><BR>Профиль:<BR><BR>".$value['name_'.$lang_current];
                            $array_tables['data'][]= "Направление: <BR><BR>".$array_specialities[$value['speciality']]['name_'.$lang_current]."<BR><BR><BR><BR>Профиль:<BR><BR>".$value['name_'.$lang_current];
                          }
						  $array_divs['settings']['show_by']="4";
                          $array_divs['settings']['style']="width:160px; height:200px; background-color:blue; margin:5px 5px; color:white; padding:50px 20px;";
                          $array_divs['settings']['class']="";
                          $array_divs['settings']['main_div']['style']="width:850px; margin:0px auto; text-align:center;";
                          $object_divs = new Divs;
                          $object_divs->ShowDivs($array_divs);

						  $array_tables['settings']['colons']="4";
                          $array_tables['settings']['td']['style']="width:200px; height:300px; background-color:blue; color:white; padding:30px 20px;";
                          $array_tables['settings']['td']['class']="";
                          $array_tables['settings']['table']['style']="width:850px; margin:0px auto; ";
                          //$object_tables = new Tables;
                          //$object_tables->Showtables($array_tables);
						}
					   echo "<DIV style=\"clear:both; padding-left:20px; padding-right:20px; \" >".$new_data_array[$_GET['id']]['text_'.$lang_current]."</DIV>";
				   }
				}
					  ?>
        </TD>
		
		
		<TD width="25%" valign="top">
    <?php
	?>
	<DIV style="padding:10px 10px; background-color:#2B8ADC; width:300px; text-align:left;">
		<?php
		foreach ($ordered_array as $key => $value) {
		$link_url="";   if (empty($value['link'])) { $link_url="index.php?show=201&id=".$value['id']; } 
              else { $link_url=$value['link']." \" target=\"_blank ";}
		?>
		<DIV class="info"><a href="<?php echo $link_url; ?>"><?php echo $value['name_'.$lang_current]; ?></a></DIV>
		<?php
			} ?>
	 </DIV>

	  </TD></TR>
	</TABLE>
	<?php
}
?>