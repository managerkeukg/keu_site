<?php 
require_once "../settings.php";
require_once _DATA_PATH_."top.php";
require_once _COMMON_DATA_PATH_."classes/ClassDataTable.php"; 

check_module_user_permission(array ("modules" =>$MODULES_ARRAY, "user_permissions" => $USER_PERMISSIONS_ARRAY), "type_speciality");
$admin_id_module=get_module_id ($MODULES_ARRAY, "type_speciality"); 

echo "<h4>Специальности (направления)</h4>";

$datagrid= new DataTable;
$datagrid-> url="?";// not
$datagrid-> id_user="1"; // not
$datagrid-> status_field="status"; //obligatory if 
$datagrid-> user_field="id_user"; //obligatory if 

$datagrid-> query(_TABLE_PREFIX_."type_specialities");
$datagrid-> table_field_caption("id", "Номер");
$datagrid-> table_field_caption("edu_type", "Тип обучения");
$datagrid-> foreign_key ("edu_type", _TABLE_PREFIX_."type_edu", "name_ru", "id");
$datagrid-> table_field_caption("name_ru", "Название");
$datagrid-> table_field_caption("name_kg", "Аты");
$datagrid-> table_field_caption("name_eng", "Name");

$datagrid-> user_module_permissions =$USER_PERMISSIONS_ARRAY[$admin_id_module];

$datagrid-> display("table");

require_once _DATA_PATH_."bottom.php";
?>