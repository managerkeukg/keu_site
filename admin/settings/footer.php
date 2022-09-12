<?php 
require_once "../settings.php";
require_once _DATA_PATH_."top.php";
require_once _COMMON_DATA_PATH_."classes/ClassDataTable.php"; 

check_module_user_permission(array ("modules" =>$MODULES_ARRAY, "user_permissions" => $USER_PERMISSIONS_ARRAY), "settings");
$admin_id_module=get_module_id ($MODULES_ARRAY, "settings");

echo "<h4>Низ сайта</h4>";

$head_settings = file_get_contents(""._DATA_PATH_."/xml/footer.xml");
$xml_array = simplexml_load_string($head_settings);
?>
<HTML xmlns="http://www.w3.org/1999/xhtml">
<HEAD>
<?php
if (isset($_POST) AND !empty($_POST)) { ///echo "<pre>"; print_r($_POST); echo "</pre>";
   $text="";
   $text="<?xml version='1.0'?>
<document>";
   foreach ($_POST as $key =>$value)
	{
      $text=$text."\r\n     <".$key.">".$value."</".$key.">";
   
   }
   $text=$text."\r\n</document>";
   ///echo $text;
   file_put_contents(""._DATA_PATH_."/xml/footer.xml", $text);
}
?>
<FORM action="" method="POST">
    <HR>
    Футер Низ сайта<BR>
	
    
    
    
	<TABLE>
	<TR>
		<TD></TD>
		<TD>Русский</TD>
		<TD>Кыргызча</TD>
		<TD>English</TD>
	</TR>
	<TR>
		<TD  style="width:100px;">Адрес:</TD>
		<TD><INPUT type="text" name="footer_address_ru" size="30" 
		    value="<?php if(isset($_POST['footer_address_ru'])) {echo $_POST['footer_address_ru'];} else {echo $xml_array->footer_address_ru; } ?>"></INPUT></TD>
		<TD><INPUT type="text" name="footer_address_kg" size="30" value="<?php if(isset($_POST['footer_address_kg'])) {echo $_POST['footer_address_kg'];} else {echo $xml_array->footer_address_kg; }?>"></INPUT></TD>
		<TD><INPUT type="text" name="footer_address_eng" size="30" value="<?php if(isset($_POST['footer_address_eng'])) {echo $_POST['footer_address_eng'];} else {echo $xml_array->footer_address_eng;} ?>"></INPUT></TD>
	</TR>
	
	
	<TR>
		<TD> </TD>
		<TD><INPUT type="text" name="footer_address_1_ru" size="30" 
		    value="<?php if(isset($_POST['footer_address_1_ru'])) {echo $_POST['footer_address_1_ru'];} else {echo $xml_array->footer_address_1_ru; } ?>"></INPUT></TD>
		<TD><INPUT type="text" name="footer_address_1_kg" size="30" value="<?php if(isset($_POST['footer_address_1_kg'])) {echo $_POST['footer_address_1_kg'];} else {echo $xml_array->footer_address_1_kg; }?>"></INPUT></TD>
		<TD><INPUT type="text" name="footer_address_1_eng" size="30" value="<?php if(isset($_POST['footer_address_1_eng'])) {echo $_POST['footer_address_1_eng'];} else {echo $xml_array->footer_address_1_eng;} ?>"></INPUT></TD>
	</TR>
	<TR>
		<TD> </TD>
		<TD><INPUT type="text" name="footer_address_2_ru" size="30" value="<?php if(isset($_POST['footer_address_2_ru'])) {echo $_POST['footer_address_2_ru'];} else {echo $xml_array->footer_address_2_ru;} ?>">  </INPUT></TD>
        <TD><INPUT type="text" name="footer_address_2_kg" size="30" value="<?php if(isset($_POST['footer_address_2_kg'])) {echo $_POST['footer_address_2_kg'];} else {echo $xml_array->footer_address_2_kg;} ?>">  </INPUT></TD>
        <TD><INPUT type="text" name="footer_address_2_eng" size="30" value="<?php if(isset($_POST['footer_address_2_eng'])) {echo $_POST['footer_address_2_eng'];} else {echo $xml_array->footer_address_2_eng;} ?>">  </INPUT></TD>
        
	</TR>
	<TR>
		<TD> </TD>
		<TD><INPUT type="text" name="footer_address_3_ru" size="30" value="<?php if(isset($_POST['footer_address_3_ru'])) {echo $_POST['footer_address_3_ru'];} else {echo $xml_array->footer_address_3_ru;} ?>">  </INPUT></TD>
		<TD><INPUT type="text" name="footer_address_3_kg" size="30" value="<?php if(isset($_POST['footer_address_3_kg'])) {echo $_POST['footer_address_3_kg'];} else {echo $xml_array->footer_address_3_kg;} ?>">  </INPUT></TD>
		<TD><INPUT type="text" name="footer_address_3_eng" size="30" value="<?php if(isset($_POST['footer_address_3_eng'])) {echo $_POST['footer_address_3_eng'];} else {echo $xml_array->footer_address_3_eng;} ?>">  </INPUT></TD>
		
	</TR>
	<TR>
		<TD  style="width:100px;">Телефоны:</TD>
		<TD><INPUT type="text" name="footer_mobile_ru" size="30" 
		    value="<?php if(isset($_POST['footer_mobile_ru'])) {echo $_POST['footer_mobile_ru'];} else {echo $xml_array->footer_mobile_ru; } ?>"></INPUT></TD>
		<TD><INPUT type="text" name="footer_mobile_kg" size="30" value="<?php if(isset($_POST['footer_mobile_kg'])) {echo $_POST['footer_mobile_kg'];} else {echo $xml_array->footer_mobile_kg; }?>"></INPUT></TD>
		<TD><INPUT type="text" name="footer_mobile_eng" size="30" value="<?php if(isset($_POST['footer_mobile_eng'])) {echo $_POST['footer_mobile_eng'];} else {echo $xml_array->footer_mobile_eng;} ?>"></INPUT></TD>
	</TR>
	<TR>
	    <TD> </TD>
		<TD><INPUT type="text" name="footer_mobile_1_ru" size="30" value="<?php if(isset($_POST['footer_mobile_1_ru'])) {echo $_POST['footer_mobile_1_ru'];} else {echo $xml_array->footer_mobile_1_ru;} ?>"></INPUT></TD>
		<TD><INPUT type="text" name="footer_mobile_1_kg" size="30" value="<?php if(isset($_POST['footer_mobile_1_kg'])) {echo $_POST['footer_mobile_1_kg'];} else {echo $xml_array->footer_mobile_1_kg;} ?>"></INPUT></TD>
		<TD><INPUT type="text" name="footer_mobile_1_eng" size="30" value="<?php if(isset($_POST['footer_mobile_1_eng'])) {echo $_POST['footer_mobile_1_eng'];} else {echo $xml_array->footer_mobile_1_eng;} ?>"></INPUT></TD>
	</TR>
	<TR>
		<TD> </TD>
		<TD><INPUT type="text" name="footer_mobile_2_ru" size="30" value="<?php if(isset($_POST['footer_mobile_2_ru'])) {echo $_POST['footer_mobile_2_ru'];} else {echo $xml_array->footer_mobile_2_ru;} ?>">  </INPUT></TD>
        <TD><INPUT type="text" name="footer_mobile_2_kg" size="30" value="<?php if(isset($_POST['footer_mobile_2_kg'])) {echo $_POST['footer_mobile_2_kg'];} else {echo $xml_array->footer_mobile_2_kg;} ?>">  </INPUT></TD>
        <TD><INPUT type="text" name="footer_mobile_2_eng" size="30" value="<?php if(isset($_POST['footer_mobile_2_eng'])) {echo $_POST['footer_mobile_2_eng'];} else {echo $xml_array->footer_mobile_2_eng;} ?>">  </INPUT></TD>
        
	</TR>
	<TR>
		<TD> </TD>
		<TD><INPUT type="text" name="footer_mobile_3_ru" size="30" value="<?php if(isset($_POST['footer_mobile_3_ru'])) {echo $_POST['footer_mobile_3_ru'];} else {echo $xml_array->footer_mobile_3_ru;} ?>">  </INPUT></TD>
		<TD><INPUT type="text" name="footer_mobile_3_kg" size="30" value="<?php if(isset($_POST['footer_mobile_3_kg'])) {echo $_POST['footer_mobile_3_kg'];} else {echo $xml_array->footer_mobile_3_kg;} ?>">  </INPUT></TD>
		<TD><INPUT type="text" name="footer_mobile_3_eng" size="30" value="<?php if(isset($_POST['footer_mobile_3_eng'])) {echo $_POST['footer_mobile_3_eng'];} else {echo $xml_array->footer_mobile_3_eng;} ?>">  </INPUT></TD>
		
	</TR>
	<TR>
		<TD  style="width:100px;">Почта:</TD>
		<TD><INPUT type="text" name="footer_email_ru" size="30" 
		    value="<?php if(isset($_POST['footer_email_ru'])) {echo $_POST['footer_email_ru'];} else {echo $xml_array->footer_email_ru; } ?>"></INPUT></TD>
		<TD><INPUT type="text" name="footer_email_kg" size="30" value="<?php if(isset($_POST['footer_email_kg'])) {echo $_POST['footer_email_kg'];} else {echo $xml_array->footer_email_kg; }?>"></INPUT></TD>
		<TD><INPUT type="text" name="footer_email_eng" size="30" value="<?php if(isset($_POST['footer_email_eng'])) {echo $_POST['footer_email_eng'];} else {echo $xml_array->footer_email_eng;} ?>"></INPUT></TD>
	</TR>
	<TR>
		<TD> </TD>
		<TD><INPUT type="text" name="footer_email_1_ru" size="30" value="<?php if(isset($_POST['footer_email_1_ru'])) {echo $_POST['footer_email_1_ru'];} else {echo $xml_array->footer_email_1_ru;} ?>"></INPUT></TD>
		<TD><INPUT type="text" name="footer_email_1_kg" size="30" value="<?php if(isset($_POST['footer_email_1_kg'])) {echo $_POST['footer_email_1_kg'];} else {echo $xml_array->footer_email_1_kg;} ?>"></INPUT></TD>
		<TD><INPUT type="text" name="footer_email_1_eng" size="30" value="<?php if(isset($_POST['footer_email_1_eng'])) {echo $_POST['footer_email_1_eng'];} else {echo $xml_array->footer_email_1_eng;} ?>"></INPUT></TD>
	</TR>
	<TR>
		<TD> </TD>
		<TD><INPUT type="text" name="footer_email_2_ru" size="30" value="<?php if(isset($_POST['footer_email_2_ru'])) {echo $_POST['footer_email_2_ru'];} else {echo $xml_array->footer_email_2_ru;} ?>">  </INPUT></TD>
        <TD><INPUT type="text" name="footer_email_2_kg" size="30" value="<?php if(isset($_POST['footer_email_2_kg'])) {echo $_POST['footer_email_2_kg'];} else {echo $xml_array->footer_email_2_kg;} ?>">  </INPUT></TD>
        <TD><INPUT type="text" name="footer_email_2_eng" size="30" value="<?php if(isset($_POST['footer_email_2_eng'])) {echo $_POST['footer_email_2_eng'];} else {echo $xml_array->footer_email_2_eng;} ?>">  </INPUT></TD>
        
	</TR>
	<TR>
		<TD> </TD>
		<TD><INPUT type="text" name="footer_email_3_ru" size="30" value="<?php if(isset($_POST['footer_email_3_ru'])) {echo $_POST['footer_email_3_ru'];} else {echo $xml_array->footer_email_3_ru;} ?>">  </INPUT></TD>
		<TD><INPUT type="text" name="footer_email_3_kg" size="30" value="<?php if(isset($_POST['footer_email_3_kg'])) {echo $_POST['footer_email_3_kg'];} else {echo $xml_array->footer_email_3_kg;} ?>">  </INPUT></TD>
		<TD><INPUT type="text" name="footer_email_3_eng" size="30" value="<?php if(isset($_POST['footer_email_3_eng'])) {echo $_POST['footer_email_3_eng'];} else {echo $xml_array->footer_email_3_eng;} ?>">  </INPUT></TD>
	</TR>
	</TABLE>
	<HR>
	<INPUT type="submit" value="Изменить"></INPUT>
	<?php
     
?>
</FORM>
<?php

require_once _DATA_PATH_."bottom.php";
?>