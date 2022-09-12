<DIV class="headers">
<?php
	require_once "common_data/functions/f_xml2array.php";
	$head_settings = file_get_contents("kel_data_admin/xml/other.xml");
	$xml_array_other = simplexml_load_string($head_settings);
	$array_xml_other= array();
	$array_xml_other=xml2array($xml_array_other);
    //echo "<pre>"; print_r($array_xml_other); echo "</pre>";
?>
<?php 
echo    $array_xml_other['footer_contacts_'.$lang_current]; 

?></DIV>
<DIV class="image_center" ><IMG SRC="img/338.jpg"></IMG></DIV>
