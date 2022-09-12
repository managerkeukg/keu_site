<?php 
require_once "../settings.php";
require_once _DATA_PATH_."top.php";
require_once _COMMON_DATA_PATH_."classes/ClassDataTable.php"; 

check_module_user_permission(array ("modules" =>$MODULES_ARRAY, "user_permissions" => $USER_PERMISSIONS_ARRAY), "staff");
$admin_id_module=get_module_id ($MODULES_ARRAY, "staff");

echo "<h4>Сотрудники КЭУ</h4>";

$datagrid= new DataTable;
$datagrid-> url="?";// not
$datagrid-> id_user="1"; // not
$datagrid-> status_field="status"; //obligatory if 
$datagrid-> user_field="id_user"; //obligatory if 

$datagrid-> query(_TABLE_PREFIX_."staff");
$datagrid-> table_field_caption("id", "Номер");
$datagrid-> table_field_caption("department", "Факультет");
$datagrid-> foreign_key ("department", _TABLE_PREFIX_."departments", "name_ru", "id");

$datagrid-> table_field_caption("name", "Имя");
$datagrid-> table_field_caption("patronymic", "Отчество");
$datagrid-> table_field_caption("surname", "Фамилия");
$datagrid-> table_field_caption("chin", "Учёная степень");
$datagrid-> table_field_caption("duty", "Должность");
$datagrid-> table_field_caption("photo", "Фото");
$datagrid-> convertcolumn_toimage ("photo", "../../img/staff/", "50");
$datagrid-> table_field_caption("birhdate", "Дата рождения");

$datagrid-> addcolumn("resize_image", "<a href=\"news_images.php\"> Изменить<BR>размеры </a>");
$datagrid-> table_field_caption("resize_image", " Изменить<BR>размеры");
$datagrid-> column_value("resize_image", '<a href="resize_image.php?id={{id}}" target=\"_blank\">=></a>');


$datagrid-> user_module_permissions =$USER_PERMISSIONS_ARRAY[$admin_id_module];

$datagrid-> display("table");

require_once _DATA_PATH_."bottom.php";
?>