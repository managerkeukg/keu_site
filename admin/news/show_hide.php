<?php 
//require_once _COMMON_DATA_PATH_."classes/ClassDataTable_test.php"; 

$status_value="";
$hide_show_image="";
$status_value=$value_buffer[$param];
$id_key_parameter="";
$id_key_parameter=$value_buffer['id'];
$link_buffer="";
$link_buffer=$show_hide_link;
$action_sss="";
//*
if (isset($status_value) AND !empty($status_value)) {
	if ($status_value=='1') {$action_sss="hidesss"; $hide_show_image="hide.gif";} 	
	if ($status_value=='2') {$action_sss="showsss"; $hide_show_image="show.gif";} 	
}
//*/
$link_buffer = str_replace("{{id}}", $id_key_parameter, $link_buffer);
$link_buffer = str_replace("{{hidesss}}", $action_sss, $link_buffer);
return $link_buffer.$hide_show_image."\" border=\"0\" ></img></a>";
?>