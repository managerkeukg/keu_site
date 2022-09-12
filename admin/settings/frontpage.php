<?php 
require_once "../settings.php";
require_once _DATA_PATH_."top.php";
require_once _COMMON_DATA_PATH_."classes/ClassDataTable.php"; 

check_module_user_permission(array ("modules" =>$MODULES_ARRAY, "user_permissions" => $USER_PERMISSIONS_ARRAY), "settings");
$admin_id_module=get_module_id ($MODULES_ARRAY, "settings");

echo "<h4>frontpage</h4>";

$head_settings = file_get_contents(""._DATA_PATH_."/xml/frontpage.xml");
$xml_array_frontpage_frontpage = simplexml_load_string($head_settings);
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
   file_put_contents(""._DATA_PATH_."/xml/frontpage.xml", $text);
}
?>
<FORM action="" method="POST">
    <HR>
    frontpage<BR>
	
    
    
    
	<TABLE>
	<TR>
		<TD></TD>
		<TD>Русское:</TD>
		<TD>Кыргызча:</TD>
		<TD>English:</TD>
	</TR>
	<TR>
	    <TD>abiturients</TD>
		<TD><INPUT type="text" name="frontpage_abiturients_name_ru" size="30" 
		    value="<?php if(isset($_POST['frontpage_abiturients_name_ru'])) {echo $_POST['frontpage_abiturients_name_ru'];} else {echo $xml_array_frontpage_frontpage->frontpage_abiturients_name_ru; } ?>"></INPUT></TD>
		<TD><INPUT type="text" name="frontpage_abiturients_name_kg" size="30" value="<?php if(isset($_POST['frontpage_abiturients_name_kg'])) {echo $_POST['frontpage_abiturients_name_kg'];} else {echo $xml_array_frontpage_frontpage->frontpage_abiturients_name_kg; }?>"></INPUT></TD>
		<TD><INPUT type="text" name="frontpage_abiturients_name_eng" size="30" value="<?php if(isset($_POST['frontpage_abiturients_name_eng'])) {echo $_POST['frontpage_abiturients_name_eng'];} else {echo $xml_array_frontpage_frontpage->frontpage_abiturients_name_eng;} ?>"></INPUT></TD>
	</TR>
	<TR>
	    <TD>Students</TD>
		<TD><INPUT type="text" name="frontpage_students_name_ru" size="30" 
		    value="<?php if(isset($_POST['frontpage_students_name_ru'])) {echo $_POST['frontpage_students_name_ru'];} else {echo $xml_array_frontpage_frontpage->frontpage_students_name_ru; } ?>"></INPUT></TD>
		<TD><INPUT type="text" name="frontpage_students_name_kg" size="30" value="<?php if(isset($_POST['frontpage_students_name_kg'])) {echo $_POST['frontpage_students_name_kg'];} else {echo $xml_array_frontpage_frontpage->frontpage_students_name_kg; }?>"></INPUT></TD>
		<TD><INPUT type="text" name="frontpage_students_name_eng" size="30" value="<?php if(isset($_POST['frontpage_students_name_eng'])) {echo $_POST['frontpage_students_name_eng'];} else {echo $xml_array_frontpage_frontpage->frontpage_students_name_eng;} ?>"></INPUT></TD>
	</TR>
	<TR>
	    <TD>science</TD>
		<TD><INPUT type="text" name="frontpage_science_name_ru" size="30" 
		    value="<?php if(isset($_POST['frontpage_science_name_ru'])) {echo $_POST['frontpage_science_name_ru'];} else {echo $xml_array_frontpage_frontpage->frontpage_science_name_ru; } ?>"></INPUT></TD>
		<TD><INPUT type="text" name="frontpage_science_name_kg" size="30" value="<?php if(isset($_POST['frontpage_science_name_kg'])) {echo $_POST['frontpage_science_name_kg'];} else {echo $xml_array_frontpage_frontpage->frontpage_science_name_kg; }?>"></INPUT></TD>
		<TD><INPUT type="text" name="frontpage_science_name_eng" size="30" value="<?php if(isset($_POST['frontpage_science_name_eng'])) {echo $_POST['frontpage_science_name_eng'];} else {echo $xml_array_frontpage_frontpage->frontpage_science_name_eng;} ?>"></INPUT></TD>
	</TR>
	<TR>
	    <TD>international</TD>
		<TD><INPUT type="text" name="frontpage_international_name_ru" size="30" 
		    value="<?php if(isset($_POST['frontpage_international_name_ru'])) {echo $_POST['frontpage_international_name_ru'];} else {echo $xml_array_frontpage_frontpage->frontpage_international_name_ru; } ?>"></INPUT></TD>
		<TD><INPUT type="text" name="frontpage_international_name_kg" size="30" value="<?php if(isset($_POST['frontpage_international_name_kg'])) {echo $_POST['frontpage_international_name_kg'];} else {echo $xml_array_frontpage_frontpage->frontpage_international_name_kg; }?>"></INPUT></TD>
		<TD><INPUT type="text" name="frontpage_international_name_eng" size="30" value="<?php if(isset($_POST['frontpage_international_name_eng'])) {echo $_POST['frontpage_international_name_eng'];} else {echo $xml_array_frontpage_frontpage->frontpage_international_name_eng;} ?>"></INPUT></TD>
	</TR>
	<TR>
	    <TD>career</TD>
		<TD><INPUT type="text" name="frontpage_career_name_ru" size="30" 
		    value="<?php if(isset($_POST['frontpage_career_name_ru'])) {echo $_POST['frontpage_career_name_ru'];} else {echo $xml_array_frontpage_frontpage->frontpage_career_name_ru; } ?>"></INPUT></TD>
		<TD><INPUT type="text" name="frontpage_career_name_kg" size="30" value="<?php if(isset($_POST['frontpage_career_name_kg'])) {echo $_POST['frontpage_career_name_kg'];} else {echo $xml_array_frontpage_frontpage->frontpage_career_name_kg; }?>"></INPUT></TD>
		<TD><INPUT type="text" name="frontpage_career_name_eng" size="30" value="<?php if(isset($_POST['frontpage_career_name_eng'])) {echo $_POST['frontpage_career_name_eng'];} else {echo $xml_array_frontpage_frontpage->frontpage_career_name_eng;} ?>"></INPUT></TD>
	</TR>
	<TR>
	    <TD>library</TD>
		<TD><INPUT type="text" name="frontpage_library_name_ru" size="30" 
		    value="<?php if(isset($_POST['frontpage_library_name_ru'])) {echo $_POST['frontpage_library_name_ru'];} else {echo $xml_array_frontpage_frontpage->frontpage_library_name_ru; } ?>"></INPUT></TD>
		<TD><INPUT type="text" name="frontpage_library_name_kg" size="30" value="<?php if(isset($_POST['frontpage_library_name_kg'])) {echo $_POST['frontpage_library_name_kg'];} else {echo $xml_array_frontpage_frontpage->frontpage_library_name_kg; }?>"></INPUT></TD>
		<TD><INPUT type="text" name="frontpage_library_name_eng" size="30" value="<?php if(isset($_POST['frontpage_library_name_eng'])) {echo $_POST['frontpage_library_name_eng'];} else {echo $xml_array_frontpage_frontpage->frontpage_library_name_eng;} ?>"></INPUT></TD>
	</TR>
	<TR>
	    <TD>corruption</TD>
		<TD><INPUT type="text" name="frontpage_corruption_name_ru" size="30" 
		    value="<?php if(isset($_POST['frontpage_corruption_name_ru'])) {echo $_POST['frontpage_corruption_name_ru'];} else {echo $xml_array_frontpage_frontpage->frontpage_corruption_name_ru; } ?>"></INPUT></TD>
		<TD><INPUT type="text" name="frontpage_corruption_name_kg" size="30" value="<?php if(isset($_POST['frontpage_corruption_name_kg'])) {echo $_POST['frontpage_corruption_name_kg'];} else {echo $xml_array_frontpage_frontpage->frontpage_corruption_name_kg; }?>"></INPUT></TD>
		<TD><INPUT type="text" name="frontpage_corruption_name_eng" size="30" value="<?php if(isset($_POST['frontpage_corruption_name_eng'])) {echo $_POST['frontpage_corruption_name_eng'];} else {echo $xml_array_frontpage_frontpage->frontpage_corruption_name_eng;} ?>"></INPUT></TD>
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