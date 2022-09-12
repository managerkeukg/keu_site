<?php 
require_once "../settings.php";
require_once _DATA_PATH_."top.php";
require_once _COMMON_DATA_PATH_."classes/ClassDataTable.php"; 

check_module_user_permission(array ("modules" =>$MODULES_ARRAY, "user_permissions" => $USER_PERMISSIONS_ARRAY), "subotdels");
$admin_id_module=get_module_id ($MODULES_ARRAY, "subotdels");

echo "<h4>Структура КЭУ</h4>";

$datagrid= new DataTable;
$datagrid-> url="?";// not
$datagrid-> id_user="1"; // not
$datagrid-> status_field="status"; //obligatory if 
$datagrid-> user_field="id_user"; //obligatory if 

$datagrid-> query(_TABLE_PREFIX_."subotdels");
$datagrid-> table_field_caption("id", "Номер");
$datagrid-> table_field_caption("order", "Порядок");

$datagrid-> table_field_caption("parent", "Родитель");
$datagrid-> foreign_key ("parent", _TABLE_PREFIX_."subotdels", "ru", "id");

$datagrid-> table_field_caption("ru", "Название подразделения");
$datagrid-> table_field_caption("text_ru", "Текст");
$datagrid-> column_hide_table("text_ru");

$datagrid-> field_type("add", "text_ru", "textarea");
$datagrid-> field_type("edit", "text_ru", "textarea");
$datagrid-> ckeditor_replace ("add", "text_ru");
$datagrid-> ckeditor_replace ("edit", "text_ru");

$datagrid-> table_field_caption("kg", "Отделдын аты");
$datagrid-> table_field_caption("text_kg", "Текст");
$datagrid-> column_hide_table("text_kg");

$datagrid-> field_type("add", "text_kg", "textarea");
$datagrid-> field_type("edit", "text_kg", "textarea");
$datagrid-> ckeditor_replace ("add", "text_kg");
$datagrid-> ckeditor_replace ("edit", "text_kg");

$datagrid-> table_field_caption("eng", "Name of department");
$datagrid-> table_field_caption("text_eng", "Text");
$datagrid-> column_hide_table("text_eng");

$datagrid-> field_type("add", "text_eng", "textarea");
$datagrid-> field_type("edit", "text_eng", "textarea");
$datagrid-> ckeditor_replace ("add", "text_eng");
$datagrid-> ckeditor_replace ("edit", "text_eng");


$datagrid-> table_field_caption("type", "Тип");
$datagrid-> foreign_key ("type", _TABLE_PREFIX_."table_subotdel_type", "name", "id");

$datagrid-> addcolumn("members", "<a href=\"members.php\">Студенты</a>");
$datagrid-> table_field_caption("members", "Лица");
$datagrid-> column_value("members", '<a href="members.php?id={{id}}">=></a>');

$datagrid-> user_module_permissions =$USER_PERMISSIONS_ARRAY[$admin_id_module];

$datagrid-> display("table");

require_once _DATA_PATH_."bottom.php";
?>