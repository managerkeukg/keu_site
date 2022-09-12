<?php 
require_once "../settings.php";
require_once _DATA_PATH_."top.php";
require_once _COMMON_DATA_PATH_."classes/ClassDataTable.php"; 

check_module_user_permission(array ("modules" =>$MODULES_ARRAY, "user_permissions" => $USER_PERMISSIONS_ARRAY), "calendar");
$admin_id_module=get_module_id ($MODULES_ARRAY, "calendar"); //echo $USER_PERMISSIONS_ARRAY[$admin_id_module];

echo "<h4>Календарь мероприятий</h4>";

$datagrid= new DataTable;
$datagrid-> url="?";// not
$datagrid-> id_user="1"; // not
$datagrid-> status_field="status"; //obligatory if 
$datagrid-> user_field="id_user"; //obligatory if 

$datagrid-> query(_TABLE_PREFIX_."calendar");
$datagrid-> table_field_caption("id", "Номер");
$datagrid-> table_field_caption("title_ru", "Заголовок");
$datagrid-> table_field_caption("text_short_ru", "Короткий текст ");

$datagrid-> table_field_caption("text_ru", "Текст ");
$datagrid-> table_field_caption("text_ru", "Текст");
$datagrid-> column_hide_table("text_ru");
$datagrid-> field_type("add", "text_ru", "textarea");
$datagrid-> field_type("edit", "text_ru", "textarea");
$datagrid-> ckeditor_replace ("add", "text_ru");
$datagrid-> ckeditor_replace ("edit", "text_ru");

$datagrid-> table_field_caption("title_kg", "Аты");
$datagrid-> table_field_caption("text_short_kg", "Текст");

$datagrid-> table_field_caption("text_kg", "Текст");
$datagrid-> column_hide_table("text_kg");
$datagrid-> field_type("add", "text_kg", "textarea");
$datagrid-> field_type("edit", "text_kg", "textarea");
$datagrid-> ckeditor_replace ("add", "text_kg");
$datagrid-> ckeditor_replace ("edit", "text_kg");


$datagrid-> table_field_caption("title_eng", "Title ");
$datagrid-> table_field_caption("text_short_eng", "Short Text");

$datagrid-> table_field_caption("text_eng", "Text");
$datagrid-> column_hide_table("text_eng");
$datagrid-> field_type("add", "text_eng", "textarea");
$datagrid-> field_type("edit", "text_eng", "textarea");
$datagrid-> ckeditor_replace ("add", "text_eng");
$datagrid-> ckeditor_replace ("edit", "text_eng");

$datagrid-> table_field_caption("photo", "Фото");
$datagrid-> convertcolumn_toimage ("photo", "../../img/calendar/", "50");

$datagrid-> table_field_caption("date", "Дата");

$datagrid-> user_module_permissions =$USER_PERMISSIONS_ARRAY[$admin_id_module];

$datagrid-> display("table");

require_once _DATA_PATH_."bottom.php";
?>