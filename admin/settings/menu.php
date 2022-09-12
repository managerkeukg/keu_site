<?php 
require_once "../settings.php";
require_once _DATA_PATH_."top.php";
require_once _COMMON_DATA_PATH_."classes/ClassDataTable.php"; 

check_module_user_permission(array ("modules" =>$MODULES_ARRAY, "user_permissions" => $USER_PERMISSIONS_ARRAY), "settings");
$admin_id_module=get_module_id ($MODULES_ARRAY, "settings");

echo "<h4>Menu</h4>";

$head_settings = file_get_contents(""._DATA_PATH_."/xml/menu.xml");
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
   file_put_contents(""._DATA_PATH_."/xml/menu.xml", $text);
}
?>
<FORM action="" method="POST">
    <HR>
    Menu<BR>
	
    
    
    
	<TABLE>
	<TR>
		<TD></TD>
		<TD>Русский</TD>
		<TD>Кыргызча</TD>
		<TD>English</TD>
		<TD>Link</TD>
	</TR>
	<TR>
		<TD  style="width:100px;">Главная</TD>
		<TD><INPUT type="text" name="menu_mainpage_ru" size="30" 
		    value="<?php if(isset($_POST['menu_mainpage_ru'])) {echo $_POST['menu_mainpage_ru'];} else {echo $xml_array->menu_mainpage_ru; } ?>"></INPUT></TD>
		<TD><INPUT type="text" name="menu_mainpage_kg" size="30" value="<?php if(isset($_POST['menu_mainpage_kg'])) {echo $_POST['menu_mainpage_kg'];} else {echo $xml_array->menu_mainpage_kg; }?>"></INPUT></TD>
		<TD><INPUT type="text" name="menu_mainpage_eng" size="30" value="<?php if(isset($_POST['menu_mainpage_eng'])) {echo $_POST['menu_mainpage_eng'];} else {echo $xml_array->menu_mainpage_eng;} ?>"></INPUT></TD>
		<TD><INPUT type="text" name="menu_mainpage_link" size="30" value="<?php if(isset($_POST['menu_mainpage_link'])) {echo $_POST['menu_mainpage_link'];} else {echo $xml_array->menu_mainpage_link;} ?>"></INPUT></TD>
	</TR>
	<TR>
		<TD  style="width:100px;">Кафедры</TD>
		<TD><INPUT type="text" name="menu_departments_ru" size="30" 
		    value="<?php if(isset($_POST['menu_departments_ru'])) {echo $_POST['menu_departments_ru'];} else {echo $xml_array->menu_departments_ru; } ?>"></INPUT></TD>
		<TD><INPUT type="text" name="menu_departments_kg" size="30" value="<?php if(isset($_POST['menu_departments_kg'])) {echo $_POST['menu_departments_kg'];} else {echo $xml_array->menu_departments_kg; }?>"></INPUT></TD>
		<TD><INPUT type="text" name="menu_departments_eng" size="30" value="<?php if(isset($_POST['menu_departments_eng'])) {echo $_POST['menu_departments_eng'];} else {echo $xml_array->menu_departments_eng;} ?>"></INPUT></TD>
		<TD><INPUT type="text" name="menu_departments_link" size="30" value="<?php if(isset($_POST['menu_departments_link'])) {echo $_POST['menu_departments_link'];} else {echo $xml_array->menu_departments_link;} ?>"></INPUT></TD>
	</TR>
	<TR>
		<TD  style="width:100px;">Университет</TD>
		<TD><INPUT type="text" name="menu_university_ru" size="30" 
		    value="<?php if(isset($_POST['menu_university_ru'])) {echo $_POST['menu_university_ru'];} else {echo $xml_array->menu_university_ru; } ?>"></INPUT></TD>
		<TD><INPUT type="text" name="menu_university_kg" size="30" value="<?php if(isset($_POST['menu_university_kg'])) {echo $_POST['menu_university_kg'];} else {echo $xml_array->menu_university_kg; }?>"></INPUT></TD>
		<TD><INPUT type="text" name="menu_university_eng" size="30" value="<?php if(isset($_POST['menu_university_eng'])) {echo $_POST['menu_university_eng'];} else {echo $xml_array->menu_university_eng;} ?>"></INPUT></TD>
		<TD><INPUT type="text" name="menu_university_link" size="30" value="<?php if(isset($_POST['menu_university_link'])) {echo $_POST['menu_university_link'];} else {echo $xml_array->menu_university_link;} ?>"></INPUT></TD>
	</TR>
	<TR>
		<TD  style="width:100px;">Структура</TD>
		<TD><INPUT type="text" name="menu_structure_ru" size="30" 
		    value="<?php if(isset($_POST['menu_structure_ru'])) {echo $_POST['menu_structure_ru'];} else {echo $xml_array->menu_structure_ru; } ?>"></INPUT></TD>
		<TD><INPUT type="text" name="menu_structure_kg" size="30" value="<?php if(isset($_POST['menu_structure_kg'])) {echo $_POST['menu_structure_kg'];} else {echo $xml_array->menu_structure_kg; }?>"></INPUT></TD>
		<TD><INPUT type="text" name="menu_structure_eng" size="30" value="<?php if(isset($_POST['menu_structure_eng'])) {echo $_POST['menu_structure_eng'];} else {echo $xml_array->menu_structure_eng;} ?>"></INPUT></TD>
		<TD><INPUT type="text" name="menu_structure_link" size="30" value="<?php if(isset($_POST['menu_structure_link'])) {echo $_POST['menu_structure_link'];} else {echo $xml_array->menu_structure_link;} ?>"></INPUT></TD>
	</TR>
	<TR>
		<TD  style="width:100px;">Сотрудникам</TD>
		<TD><INPUT type="text" name="menu_personal_ru" size="30" 
		    value="<?php if(isset($_POST['menu_personal_ru'])) {echo $_POST['menu_personal_ru'];} else {echo $xml_array->menu_personal_ru; } ?>"></INPUT></TD>
		<TD><INPUT type="text" name="menu_personal_kg" size="30" value="<?php if(isset($_POST['menu_personal_kg'])) {echo $_POST['menu_personal_kg'];} else {echo $xml_array->menu_personal_kg; }?>"></INPUT></TD>
		<TD><INPUT type="text" name="menu_personal_eng" size="30" value="<?php if(isset($_POST['menu_personal_eng'])) {echo $_POST['menu_personal_eng'];} else {echo $xml_array->menu_personal_eng;} ?>"></INPUT></TD>
		<TD><INPUT type="text" name="menu_personal_link" size="30" value="<?php if(isset($_POST['menu_personal_link'])) {echo $_POST['menu_personal_link'];} else {echo $xml_array->menu_personal_link;} ?>"></INPUT></TD>
	</TR>
	<TR>
		<TD  style="width:100px;">Контакты</TD>
		<TD><INPUT type="text" name="menu_contacts_ru" size="30" 
		    value="<?php if(isset($_POST['menu_contacts_ru'])) {echo $_POST['menu_contacts_ru'];} else {echo $xml_array->menu_contacts_ru; } ?>"></INPUT></TD>
		<TD><INPUT type="text" name="menu_contacts_kg" size="30" value="<?php if(isset($_POST['menu_contacts_kg'])) {echo $_POST['menu_contacts_kg'];} else {echo $xml_array->menu_contacts_kg; }?>"></INPUT></TD>
		<TD><INPUT type="text" name="menu_contacts_eng" size="30" value="<?php if(isset($_POST['menu_contacts_eng'])) {echo $_POST['menu_contacts_eng'];} else {echo $xml_array->menu_contacts_eng;} ?>"></INPUT></TD>
		<TD><INPUT type="text" name="menu_contacts_link" size="30" value="<?php if(isset($_POST['menu_contacts_link'])) {echo $_POST['menu_contacts_link'];} else {echo $xml_array->menu_contacts_link;} ?>"></INPUT></TD>
	</TR>
	<TR>
		<TD  style="width:100px;">Образовательный <BR> портал</TD>
		<TD><INPUT type="text" name="menu_portal_ru" size="30" 
		    value="<?php if(isset($_POST['menu_portal_ru'])) {echo $_POST['menu_portal_ru'];} else {echo $xml_array->menu_portal_ru; } ?>"></INPUT></TD>
		<TD><INPUT type="text" name="menu_portal_kg" size="30" value="<?php if(isset($_POST['menu_portal_kg'])) {echo $_POST['menu_portal_kg'];} else {echo $xml_array->menu_portal_kg; }?>"></INPUT></TD>
		<TD><INPUT type="text" name="menu_portal_eng" size="30" value="<?php if(isset($_POST['menu_portal_eng'])) {echo $_POST['menu_portal_eng'];} else {echo $xml_array->menu_portal_eng;} ?>"></INPUT></TD>
		<TD><INPUT type="text" name="menu_portal_link" size="30" value="<?php if(isset($_POST['menu_portal_link'])) {echo $_POST['menu_portal_link'];} else {echo $xml_array->menu_portal_link;} ?>"></INPUT></TD>
	</TR>
	
	<TR>
		<TD  style="width:100px;">Дистанционное обучение</TD>
		<TD><INPUT type="text" name="menu_distant_ru" size="30" 
		    value="<?php if(isset($_POST['menu_distant_ru'])) {echo $_POST['menu_distant_ru'];} else {echo $xml_array->menu_distant_ru; } ?>"></INPUT></TD>
		<TD><INPUT type="text" name="menu_distant_kg" size="30" value="<?php if(isset($_POST['menu_distant_kg'])) {echo $_POST['menu_distant_kg'];} else {echo $xml_array->menu_distant_kg; }?>"></INPUT></TD>
		<TD><INPUT type="text" name="menu_distant_eng" size="30" value="<?php if(isset($_POST['menu_distant_eng'])) {echo $_POST['menu_distant_eng'];} else {echo $xml_array->menu_distant_eng;} ?>"></INPUT></TD>
		<TD><INPUT type="text" name="menu_distant_link" size="30" value="<?php if(isset($_POST['menu_distant_link'])) {echo $_POST['menu_distant_link'];} else {echo $xml_array->menu_distant_link;} ?>"></INPUT></TD>
	</TR>
	
	<TR>
		<TD  style="width:100px;">Информационная система AVN</TD>
		<TD><INPUT type="text" name="menu_avn_ru" size="30" 
		    value="<?php if(isset($_POST['menu_avn_ru'])) {echo $_POST['menu_avn_ru'];} else {echo $xml_array->menu_avn_ru; } ?>"></INPUT></TD>
		<TD><INPUT type="text" name="menu_avn_kg" size="30" value="<?php if(isset($_POST['menu_avn_kg'])) {echo $_POST['menu_avn_kg'];} else {echo $xml_array->menu_avn_kg; }?>"></INPUT></TD>
		<TD><INPUT type="text" name="menu_avn_eng" size="30" value="<?php if(isset($_POST['menu_avn_eng'])) {echo $_POST['menu_avn_eng'];} else {echo $xml_array->menu_avn_eng;} ?>"></INPUT></TD>
		<TD><INPUT type="text" name="menu_avn_link" size="30" value="<?php if(isset($_POST['menu_avn_link'])) {echo $_POST['menu_avn_link'];} else {echo $xml_array->menu_avn_link;} ?>"></INPUT></TD>
	</TR>
	
	<TR>
		<TD  style="width:100px;">Online Тестирование AVN</TD>
		<TD><INPUT type="text" name="menu_avn_onlinetest_ru" size="30" 
		    value="<?php if(isset($_POST['menu_avn_onlinetest_ru'])) {echo $_POST['menu_avn_onlinetest_ru'];} else {echo $xml_array->menu_avn_onlinetest_ru; } ?>"></INPUT></TD>
		<TD><INPUT type="text" name="menu_avn_onlinetest_kg" size="30" value="<?php if(isset($_POST['menu_avn_onlinetest_kg'])) {echo $_POST['menu_avn_onlinetest_kg'];} else {echo $xml_array->menu_avn_onlinetest_kg; }?>"></INPUT></TD>
		<TD><INPUT type="text" name="menu_avn_onlinetest_eng" size="30" value="<?php if(isset($_POST['menu_avn_onlinetest_eng'])) {echo $_POST['menu_avn_onlinetest_eng'];} else {echo $xml_array->menu_avn_onlinetest_eng;} ?>"></INPUT></TD>
		<TD><INPUT type="text" name="menu_avn_onlinetest_link" size="30" value="<?php if(isset($_POST['menu_avn_onlinetest_link'])) {echo $_POST['menu_avn_onlinetest_link'];} else {echo $xml_array->menu_avn_onlinetest_link;} ?>"></INPUT></TD>
	</TR>
	<TR>
		<TD  style="width:100px;">Электронная ведомость AVN</TD>
		<TD><INPUT type="text" name="menu_avn_vedomost_ru" size="30" 
		    value="<?php if(isset($_POST['menu_avn_vedomost_ru'])) {echo $_POST['menu_avn_vedomost_ru'];} else {echo $xml_array->menu_avn_vedomost_ru; } ?>"></INPUT></TD>
		<TD><INPUT type="text" name="menu_avn_vedomost_kg" size="30" value="<?php if(isset($_POST['menu_avn_vedomost_kg'])) {echo $_POST['menu_avn_vedomost_kg'];} else {echo $xml_array->menu_avn_vedomost_kg; }?>"></INPUT></TD>
		<TD><INPUT type="text" name="menu_avn_vedomost_eng" size="30" value="<?php if(isset($_POST['menu_avn_vedomost_eng'])) {echo $_POST['menu_avn_vedomost_eng'];} else {echo $xml_array->menu_avn_vedomost_eng;} ?>"></INPUT></TD>
		<TD><INPUT type="text" name="menu_avn_vedomost_link" size="30" value="<?php if(isset($_POST['menu_avn_vedomost_link'])) {echo $_POST['menu_avn_vedomost_link'];} else {echo $xml_array->menu_avn_vedomost_link;} ?>"></INPUT></TD>
	</TR>
	<TR>
		<TD  style="width:100px;">Электронная библиотека</TD>
		<TD><INPUT type="text" name="menu_library_ru" size="30" 
		    value="<?php if(isset($_POST['menu_library_ru'])) {echo $_POST['menu_library_ru'];} else {echo $xml_array->menu_library_ru; } ?>"></INPUT></TD>
		<TD><INPUT type="text" name="menu_library_kg" size="30" value="<?php if(isset($_POST['menu_library_kg'])) {echo $_POST['menu_library_kg'];} else {echo $xml_array->menu_library_kg; }?>"></INPUT></TD>
		<TD><INPUT type="text" name="menu_library_eng" size="30" value="<?php if(isset($_POST['menu_library_eng'])) {echo $_POST['menu_library_eng'];} else {echo $xml_array->menu_library_eng;} ?>"></INPUT></TD>
		<TD><INPUT type="text" name="menu_library_link" size="30" value="<?php if(isset($_POST['menu_library_link'])) {echo $_POST['menu_library_link'];} else {echo $xml_array->menu_library_link;} ?>"></INPUT></TD>
	</TR>
	
	<TR>
		<TD  style="width:100px;">ПОЧТА keu.kg</TD>
		<TD><INPUT type="text" name="menu_email_ru" size="30" 
		    value="<?php if(isset($_POST['menu_email_ru'])) {echo $_POST['menu_email_ru'];} else {echo $xml_array->menu_email_ru; } ?>"></INPUT></TD>
		<TD><INPUT type="text" name="menu_email_kg" size="30" value="<?php if(isset($_POST['menu_email_kg'])) {echo $_POST['menu_email_kg'];} else {echo $xml_array->menu_email_kg; }?>"></INPUT></TD>
		<TD><INPUT type="text" name="menu_email_eng" size="30" value="<?php if(isset($_POST['menu_email_eng'])) {echo $_POST['menu_email_eng'];} else {echo $xml_array->menu_email_eng;} ?>"></INPUT></TD>
		<TD><INPUT type="text" name="menu_email_link" size="30" value="<?php if(isset($_POST['menu_email_link'])) {echo $_POST['menu_email_link'];} else {echo $xml_array->menu_email_link;} ?>"></INPUT></TD>
	</TR>
	
	<TR>
		<TD  style="width:100px;">Документация</TD>
		<TD><INPUT type="text" name="menu_edoc_ru" size="30" 
		    value="<?php if(isset($_POST['menu_edoc_ru'])) {echo $_POST['menu_edoc_ru'];} else {echo $xml_array->menu_edoc_ru; } ?>"></INPUT></TD>
		<TD><INPUT type="text" name="menu_edoc_kg" size="30" value="<?php if(isset($_POST['menu_edoc_kg'])) {echo $_POST['menu_edoc_kg'];} else {echo $xml_array->menu_edoc_kg; }?>"></INPUT></TD>
		<TD><INPUT type="text" name="menu_edoc_eng" size="30" value="<?php if(isset($_POST['menu_edoc_eng'])) {echo $_POST['menu_edoc_eng'];} else {echo $xml_array->menu_edoc_eng;} ?>"></INPUT></TD>
		<TD><INPUT type="text" name="menu_edoc_link" size="30" value="<?php if(isset($_POST['menu_edoc_link'])) {echo $_POST['menu_edoc_link'];} else {echo $xml_array->menu_edoc_link;} ?>"></INPUT></TD>
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