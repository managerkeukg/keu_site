<?php
require_once "common_data/functions/f_xml2array.php";
$header_settings = file_get_contents("kel_data_admin/xml/header.xml");
$xml_array_header = simplexml_load_string($header_settings);
$array_header_xml= array();
$array_header_xml= xml2array($xml_array_header);
?>
<DIV style="outline:0px solid green; width:1280px;  height:100px; margin-top:-17px; ">
       
        <DIV style="outline:0px solid red; float:left; padding:10px 10px; text-align:center;">
		   <IMG src="img/icons/building_new.jpg" height="80px"></IMG>
		</DIV>
		
		<DIV style="float:left; 
		 
		
		
		height:100px;
		width:600px;
		padding-left:0px;
		" >
		<IMG src="img/icons/header_text_<?php echo $lang_current; ?>.jpg" height="80px"></IMG>		
		</DIV>

	   <DIV style="outline:0px solid red; float:left; padding:10px 10px 10px 100px; text-align:right;">
		   
		   <IMG src="img/icons/logo_new.jpg" style="height:80px;"></IMG>
		</DIV>
   <DIV style="float:right; text-align:right; padding-right:20px;">
		   <?php    include_once "block_social.php";  ?>
		   <?php    include_once "lang.php";  ?>
	   </DIV>
   

 	   
	   <DIV style=" outline:0px solid aqua; float:left; width:100%; margin-top:0px;">
	       <?php //include "menu.php";?> 
	   </DIV>
</DIV> 