<?php 
require_once "../settings.php";
require_once _DATA_PATH_."top.php";
require_once _COMMON_DATA_PATH_."classes/ClassDataTable.php"; 

check_module_user_permission(array ("modules" =>$MODULES_ARRAY, "user_permissions" => $USER_PERMISSIONS_ARRAY), "settings");
$admin_id_module=get_module_id ($MODULES_ARRAY, "settings");

echo "<h4>Низ сайта</h4>";

$head_settings = file_get_contents(""._DATA_PATH_."/xml/other.xml");
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
   file_put_contents(""._DATA_PATH_."/xml/other.xml", $text);
}
?>
<FORM action="" method="POST">
    <HR>
    Остальное<BR>
	
    
    
    
	<TABLE>
	<TR>
		<TD></TD>
		<TD>Русский</TD>
		<TD>Кыргызча</TD>
		<TD>English</TD>
	</TR>
	<TR>
		<TD  style="width:100px;">НОВОСТИ:</TD>
		<TD><INPUT type="text" name="footer_news_ru" size="30" 
		    value="<?php if(isset($_POST['footer_news_ru'])) {echo $_POST['footer_news_ru'];} else {echo $xml_array->footer_news_ru; } ?>"></INPUT></TD>
		<TD><INPUT type="text" name="footer_news_kg" size="30" value="<?php if(isset($_POST['footer_news_kg'])) {echo $_POST['footer_news_kg'];} else {echo $xml_array->footer_news_kg; }?>"></INPUT></TD>
		<TD><INPUT type="text" name="footer_news_eng" size="30" value="<?php if(isset($_POST['footer_news_eng'])) {echo $_POST['footer_news_eng'];} else {echo $xml_array->footer_news_eng;} ?>"></INPUT></TD>
	</TR>
	<TR>
		<TD  style="width:100px;">ОБЪЯВЛЕНИЯ:</TD>
		<TD><INPUT type="text" name="footer_announcements_ru" size="30" 
		    value="<?php if(isset($_POST['footer_announcements_ru'])) {echo $_POST['footer_announcements_ru'];} else {echo $xml_array->footer_announcements_ru; } ?>"></INPUT></TD>
		<TD><INPUT type="text" name="footer_announcements_kg" size="30" value="<?php if(isset($_POST['footer_announcements_kg'])) {echo $_POST['footer_announcements_kg'];} else {echo $xml_array->footer_announcements_kg; }?>"></INPUT></TD>
		<TD><INPUT type="text" name="footer_announcements_eng" size="30" value="<?php if(isset($_POST['footer_announcements_eng'])) {echo $_POST['footer_announcements_eng'];} else {echo $xml_array->footer_announcements_eng;} ?>"></INPUT></TD>
	</TR>
	<TR>
		<TD  style="width:100px;">Контакты:</TD>
		<TD><INPUT type="text" name="footer_contacts_ru" size="30" 
		    value="<?php if(isset($_POST['footer_contacts_ru'])) {echo $_POST['footer_contacts_ru'];} else {echo $xml_array->footer_contacts_ru; } ?>"></INPUT></TD>
		<TD><INPUT type="text" name="footer_contacts_kg" size="30" value="<?php if(isset($_POST['footer_contacts_kg'])) {echo $_POST['footer_contacts_kg'];} else {echo $xml_array->footer_contacts_kg; }?>"></INPUT></TD>
		<TD><INPUT type="text" name="footer_contacts_eng" size="30" value="<?php if(isset($_POST['footer_contacts_eng'])) {echo $_POST['footer_contacts_eng'];} else {echo $xml_array->footer_contacts_eng;} ?>"></INPUT></TD>
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