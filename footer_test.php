<STYLE>
.footer_blocks {
width:22%; 
font-size:14px; 
text-align: left;
float:left; 
outline:0px solid red;
padding-left:20px;
}

.footer_block {
outline:0px solid red;
height:100px;
}
</STYLE>
<?php
require_once "common_data/functions/f_xml2array.php";
$head_settings = file_get_contents("kel_data_admin/xml/footer.xml");
$xml_array = simplexml_load_string($head_settings);
$array_footer_xml= array();
$array_footer_xml=xml2array($xml_array);

?>
<DIV class="footer_block">
    <DIV class="footer_blocks"> 
	   <DIV style="width:100%;">
	     <IMG src="img/icons/building.png" height="80px"></IMG>
	   </DIV>   
	</DIV>
	<DIV class="footer_blocks">  
	   <DIV style="float:left; height:90px; padding-right:10px;"><IMG src="img/icons/footer_address.png" width="33px"></IMG></DIV>
	   <DIV style="width:100%;"> <?php  echo $array_footer_xml['footer_address_'.$lang_current]; ?>: </DIV>
	   <DIV style="width:100%; padding-top:10px;"> <?php echo $array_footer_xml['footer_address_1_'.$lang_current]; ?>
	        <?php //echo  $array_footer_address['0'][$lang_current]; ?></DIV> 
	   <DIV style="width:100%;"> <?php echo $array_footer_xml['footer_address_2_'.$lang_current]; ?><?php //echo  $array_footer_address['1'][$lang_current]; ?></DIV> 
	   <DIV style="width:100%;"><?php echo $array_footer_xml['footer_address_3_'.$lang_current]; ?></DIV>   
	</DIV>

	<DIV class="footer_blocks"> 
	   <DIV style="float:left; height:90px; padding-right:10px;"><IMG src="img/icons/footer_mobile.png" width="33px"></IMG></DIV>
	   <DIV style="width:100%;"><?php echo $array_footer_xml['footer_mobile_'.$lang_current]; ?>: </DIV>
	   <DIV style="width:100%; padding-top:10px;"> <?php echo $array_footer_xml['footer_mobile_1_'.$lang_current]; ?></DIV> 
	   <DIV style="width:100%;"><?php echo $array_footer_xml['footer_mobile_2_'.$lang_current]; ?></DIV>   
	</DIV>

	<DIV class="footer_blocks"> 
	   <DIV style="float:left; height:90px; padding-right:10px;"><IMG src="img/icons/footer_email.png" width="33px"></IMG></DIV>
	   <DIV style="width:100%;"><?php echo $array_footer_xml['footer_email_'.$lang_current]; ?>: </DIV>
	   <DIV style="width:100%; padding-top:10px;"><?php echo $array_footer_xml['footer_email_1_'.$lang_current]; ?></DIV> 
	   <DIV style="width:100%;"><?php echo $array_footer_xml['footer_email_2_'.$lang_current]; ?></DIV>   
	</DIV>
    <?php include "mail_ru_simple.php"; 
	?>
	
</DIV>
