<?php 
require_once "../settings.php";
require_once _DATA_PATH_."top.php";
require_once _COMMON_DATA_PATH_."classes/ClassDataTable.php"; 

check_module_user_permission(array ("modules" =>$MODULES_ARRAY, "user_permissions" => $USER_PERMISSIONS_ARRAY), "social");
$admin_id_module=get_module_id ($MODULES_ARRAY, "social");

echo "<h4>Social</h4>";
echo "Рисунки должны быть 48(ширина) на 48 (высота)<BR>";
$datagrid= new DataTable;
$datagrid-> url="?";// not
$datagrid-> id_user="1"; // not
$datagrid-> status_field="status"; //obligatory if 
$datagrid-> user_field="id_user"; //obligatory if 

$datagrid-> query(_TABLE_PREFIX_."social");
$datagrid-> table_field_caption("id", "Номер");
$datagrid-> table_field_caption("name", "Название");
$datagrid-> table_field_caption("order", "Порядок");
$datagrid-> table_field_caption("link", "Ссылка");
$datagrid-> table_field_caption("image", "Фото");
$datagrid-> convertcolumn_toimage ("image", "../../img/icons/social/", "50");

$datagrid-> user_module_permissions =$USER_PERMISSIONS_ARRAY[$admin_id_module];

$datagrid-> display("table");

require_once _DATA_PATH_."bottom.php";
?>