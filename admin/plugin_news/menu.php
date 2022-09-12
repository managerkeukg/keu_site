<?php 
require_once "../settings.php";
require_once _DATA_PATH_."top.php";
require_once _COMMON_DATA_PATH_."classes/ClassDataTable.php"; 

check_module_user_permission(array ("modules" =>$MODULES_ARRAY, "user_permissions" => $USER_PERMISSIONS_ARRAY), "plugin_news");
$admin_id_module=get_module_id ($MODULES_ARRAY, "plugin_news");

echo "<h4>Новости</h4>";

$head_settings = file_get_contents(""._DATA_PATH_."/xml/plugins/news/index.xml");
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
   file_put_contents(""._DATA_PATH_."/xml/plugins/news/index.xml", $text);
}
?>
<FORM action="" method="POST">
    <HR>
    Menu<BR>
	
    
    
    
	<TABLE>
	<TR>
		<TD  style="width:100px;">Ширина блока px</TD>
		<TD><INPUT type="text" name="block_width" size="30" 
		    value="<?php if(isset($_POST['block_width'])) {echo $_POST['block_width'];} else {echo $xml_array->block_width; } ?>"></INPUT></TD>
	</TR>
	<TR>
		<TD  style="width:100px;">Высота блока  px</TD>
		<TD><INPUT type="text" name="block_height" size="30" 
		    value="<?php if(isset($_POST['block_height'])) {echo $_POST['block_height'];} else {echo $xml_array->block_height; } ?>"></INPUT></TD>
	</TR>

	<TR>
		<TD  style="width:100px;">Records viewed</TD>
		<TD><INPUT type="text" name="records_viewed" size="30" 
		    value="<?php if(isset($_POST['records_viewed'])) {echo $_POST['records_viewed'];} else {echo $xml_array->records_viewed; } ?>"></INPUT></TD>
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