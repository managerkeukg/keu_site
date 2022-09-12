<?php 
require_once "../settings.php";
require_once _DATA_PATH_."top.php";
require_once _COMMON_DATA_PATH_."classes/ClassDataTable.php"; 

check_module_user_permission(array ("modules" =>$MODULES_ARRAY, "user_permissions" => $USER_PERMISSIONS_ARRAY), "settings");
$admin_id_module=get_module_id ($MODULES_ARRAY, "settings");

echo "<h4>Верх  сайта</h4>";

$head_settings = file_get_contents(""._DATA_PATH_."/xml/header.xml");
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
   file_put_contents(""._DATA_PATH_."/xml/header.xml", $text);
}
?>
<FORM action="" method="POST">
    <HR>
    Верх  сайта<BR><BR><BR>
	
    
    
    
	<TABLE>
	<TR>
		<TD>Название университета:</TD>
		<TD>Университеттин аты:</TD>
		<TD>University name:</TD>
	</TR>
	<TR>
		<TD><INPUT type="text" name="header_univ_name_1_ru" size="30" 
		    value="<?php if(isset($_POST['header_univ_name_1_ru'])) {echo $_POST['header_univ_name_1_ru'];} else {echo $xml_array->header_univ_name_1_ru; } ?>"></INPUT></TD>
		<TD><INPUT type="text" name="header_univ_name_1_kg" size="30" value="<?php if(isset($_POST['header_univ_name_1_kg'])) {echo $_POST['header_univ_name_1_kg'];} else {echo $xml_array->header_univ_name_1_kg; }?>"></INPUT></TD>
		<TD><INPUT type="text" name="header_univ_name_1_eng" size="30" value="<?php if(isset($_POST['header_univ_name_1_eng'])) {echo $_POST['header_univ_name_1_eng'];} else {echo $xml_array->header_univ_name_1_eng;} ?>"></INPUT></TD>
	</TR>
	<TR>
		<TD><INPUT type="text" name="header_univ_name_2_ru" size="30" value="<?php if(isset($_POST['header_univ_name_2_ru'])) {echo $_POST['header_univ_name_2_ru'];} else {echo $xml_array->header_univ_name_2_ru;} ?>">  </INPUT></TD>
        <TD><INPUT type="text" name="header_univ_name_2_kg" size="30" value="<?php if(isset($_POST['header_univ_name_2_kg'])) {echo $_POST['header_univ_name_2_kg'];} else {echo $xml_array->header_univ_name_2_kg;} ?>">  </INPUT></TD>
        <TD><INPUT type="text" name="header_univ_name_2_eng" size="30" value="<?php if(isset($_POST['header_univ_name_2_eng'])) {echo $_POST['header_univ_name_2_eng'];} else {echo $xml_array->header_univ_name_2_eng;} ?>">  </INPUT></TD>
        
	</TR>
	<TR>
		<TD><INPUT type="text" name="header_univ_name_3_ru" size="30" value="<?php if(isset($_POST['header_univ_name_3_ru'])) {echo $_POST['header_univ_name_3_ru'];} else {echo $xml_array->header_univ_name_3_ru;} ?>">  </INPUT></TD>
		<TD><INPUT type="text" name="header_univ_name_3_kg" size="30" value="<?php if(isset($_POST['header_univ_name_3_kg'])) {echo $_POST['header_univ_name_3_kg'];} else {echo $xml_array->header_univ_name_3_kg;} ?>">  </INPUT></TD>
		<TD><INPUT type="text" name="header_univ_name_3_eng" size="30" value="<?php if(isset($_POST['header_univ_name_3_eng'])) {echo $_POST['header_univ_name_3_eng'];} else {echo $xml_array->header_univ_name_3_eng;} ?>">  </INPUT></TD>
		<TD></TD>
		<TD></TD>
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