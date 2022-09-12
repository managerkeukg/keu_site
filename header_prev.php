<?php
require_once "common_data/functions/f_xml2array.php";
$header_settings = file_get_contents("kel_data_admin/xml/header.xml");
$xml_array_header = simplexml_load_string($header_settings);
$array_header_xml= array();
$array_header_xml= xml2array($xml_array_header);
?>
<DIV style="outline:0px solid green; width:1280px;  height:100px; margin-top:-17px; ">
       
        <DIV style="outline:0px solid red; float:left; padding:10px 10px; text-align:center;">
		   <IMG src="img/icons/building_blue.jpg" height="80px"></IMG>
		</DIV>
		
		<DIV style="float:left; 
		font-size: 2.6em;
		font-family:verdana;
		font-weight:bold;
		color:#252C2C;  
		background-image: url(img/template/logo.jpg);
		background-position: center center;
		background-repeat: no-repeat;
		height:100px;
		width:600px;
		padding-left:100px;
		" >
					<DIV style="padding:30px 0px 10px 0px; font-size: 18px; text-align:center;">
					<?php 
					echo $array_header_xml['header_univ_name_1_'.$lang_current];
					echo "<BR>".$array_header_xml['header_univ_name_2_'.$lang_current];
					
					//echo $array_univ_name[$lang_current]['0']." ". $array_univ_name[$lang_current]['1']." ". $array_univ_name[$lang_current]['2'];
					//echo " <BR> ".$array_univ_name[$lang_current]['3'];
					?>
					</DIV>
					<!-- <DIV style="border-top:1px dotted #3C80F2; width:180px;"></DIV> -->
		</DIV>

	   <DIV style="outline:0px solid red; float:left; padding:10px 10px 10px 100px; text-align:right;">
		   
		   <IMG src="img/portal/gerb.png" style="height:70px;"></IMG>
		</DIV>
   <DIV style="float:right; text-align:right; padding-right:20px;">
		   <?php    include_once "block_social.php";  ?>
		   <?php    include_once "lang.php";  ?>
	   </DIV>
   

 	   
	   <DIV style=" outline:0px solid aqua; float:left; width:100%; margin-top:0px;">
	       <?php //include "menu.php";?> 
	   </DIV>
</DIV> 