<?php 
require_once "../settings.php";
require_once _DATA_PATH_."top.php";
require_once _COMMON_DATA_PATH_."classes/ClassDataTable.php"; 

check_module_user_permission(array ("modules" =>$MODULES_ARRAY, "user_permissions" => $USER_PERMISSIONS_ARRAY), "modules");
$admin_id_module=get_module_id ($MODULES_ARRAY, "modules");

$datagrid= new DataTable;
$datagrid-> url="?";
$datagrid-> id_user="1";
$datagrid-> status_field="status";
$datagrid-> user_field="id_user";

$datagrid-> query(_TABLE_PREFIX_._USER_PREFIX_."_access_modules");
$datagrid-> table_field_caption("id", "Номер");
$datagrid-> table_field_caption("turn", "Порядок");
$datagrid-> table_field_caption("name", "Модуль");
$datagrid-> table_field_caption("blocks", "Блок");
$datagrid-> foreign_key ("blocks", _TABLE_PREFIX_."admin_blocks", "name", "id");

$datagrid-> user_module_permissions =$USER_PERMISSIONS_ARRAY[$admin_id_module];

$datagrid-> display("table");

require_once _DATA_PATH_."bottom.php";
?>