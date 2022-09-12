<?php 
require_once "../settings.php";
require_once _DATA_PATH_."top.php";
require_once _COMMON_DATA_PATH_."classes/ClassDataTable.php"; 

check_module_user_permission(array ("modules" =>$MODULES_ARRAY, "user_permissions" => $USER_PERMISSIONS_ARRAY), "online_lectures");
$admin_id_module=get_module_id ($MODULES_ARRAY, "online_lectures"); //echo $USER_PERMISSIONS_ARRAY[$admin_id_module];
///echo "<pre>USER MODULE PERMISSIONS "; print_r($USER_PERMISSIONS_ARRAY[$admin_id_module]) ; echo "</pre>";
echo "<h4>Лекции</h4>";

$datagrid= new DataTable;
$datagrid-> url="?";// not
$datagrid-> status_field="status"; //obligatory if 

$datagrid-> query(_TABLE_PREFIX_."online_lectures");
$datagrid-> table_field_caption("id", "Номер");
$datagrid-> table_field_caption("discipline", "Дисциплина");
$datagrid-> foreign_key ("discipline", _TABLE_PREFIX_."online_disciplines", "name_ru", "id");


$datagrid-> table_field_caption("name_ru", "Название");
$datagrid-> table_field_caption("video", "Ссылка на видео");
$datagrid-> table_field_caption("presentation", "Ссылка на презентацию ");

$datagrid-> table_field_caption("syllabus", "Силлабус");

$datagrid-> table_field_caption("text_lecture", "Ссылка на текст лекции");

$datagrid-> table_field_caption("practice", "Ссылка на файл практики");


$datagrid-> user_module_permissions =$USER_PERMISSIONS_ARRAY[$admin_id_module];


$datagrid-> display("table");

require_once _DATA_PATH_."bottom.php";
?>