<?php 
require_once "../settings.php";
require_once _DATA_PATH_."top.php";
require_once _COMMON_DATA_PATH_."classes/ClassDataTable.php"; 

check_module_user_permission(array ("modules" =>$MODULES_ARRAY, "user_permissions" => $USER_PERMISSIONS_ARRAY), "front_menu");
$admin_id_module=get_module_id ($MODULES_ARRAY, "front_menu");

echo "<h4>Фронт меню</h4>";
echo "Рисунки должны быть 200(ширина) на 250 (высота)";
$datagrid= new DataTable;
$datagrid-> url="?";// not
$datagrid-> id_user="1"; // not
$datagrid-> status_field="status"; //obligatory if 
$datagrid-> user_field="id_user"; //obligatory if 

$datagrid-> query(_TABLE_PREFIX_."menu_front");
$datagrid-> table_field_caption("id", "Номер");
$datagrid-> table_field_caption("order", "Порядок");
$datagrid-> table_field_caption("link", "Ссылка");
$datagrid-> table_field_caption("image", "Фото");
$datagrid-> convertcolumn_toimage ("image", "../../img/front_menu/", "50");
$datagrid-> table_field_caption("title_ru", "Заголовок");
$datagrid-> table_field_caption("short_title_ru", "Краткий заголовок");
$datagrid-> table_field_caption("title_kg", "Заголовок");
$datagrid-> table_field_caption("short_title_kg", "Кыска");
$datagrid-> table_field_caption("title_eng", "Title");
$datagrid-> table_field_caption("short_title_eng", "Short Title");

$datagrid-> user_module_permissions =$USER_PERMISSIONS_ARRAY[$admin_id_module];

$datagrid-> display("table");

require_once _DATA_PATH_."bottom.php";
?>