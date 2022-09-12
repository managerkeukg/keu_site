<?php 
require_once "../settings.php";
require_once _DATA_PATH_."top.php";
require_once _COMMON_DATA_PATH_."classes/ClassDataTable.php"; 

check_module_user_permission(array ("modules" =>$MODULES_ARRAY, "user_permissions" => $USER_PERMISSIONS_ARRAY), "menu");
$admin_id_module=get_module_id ($MODULES_ARRAY, "menu");

echo "<h4>Меню</h4>";
$datagrid= new DataTable;
$datagrid-> url="?";// not
$datagrid-> id_user="1"; // not
$datagrid-> status_field="status"; //obligatory if 
$datagrid-> user_field="id_user"; //obligatory if 

$datagrid-> query(_TABLE_PREFIX_."menu");
$datagrid-> table_field_caption("id", "Номер");
$datagrid-> table_field_caption("order", "Порядок");
$datagrid-> table_field_caption("link", "Ссылка");
$datagrid-> table_field_caption("parent", "Родитель");
$datagrid-> foreign_key ("parent", _TABLE_PREFIX_."menu", "name_ru", "id");
$datagrid-> table_field_caption("name_ru", "Ру");
$datagrid-> table_field_caption("name_kg", "Кг");
$datagrid-> table_field_caption("name_eng", "English");

$datagrid-> user_module_permissions =$USER_PERMISSIONS_ARRAY[$admin_id_module];

$datagrid-> display("table");

require_once _DATA_PATH_."bottom.php";
?>