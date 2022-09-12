<?php 
require_once "../settings.php";
require_once _DATA_PATH_."top.php";
require_once _COMMON_DATA_PATH_."classes/ClassDataTable.php"; 

check_module_user_permission(array ("modules" =>$MODULES_ARRAY, "user_permissions" => $USER_PERMISSIONS_ARRAY), "center_competence");
$admin_id_module=get_module_id ($MODULES_ARRAY, "center_competence"); 

echo "<h4>Новости</h4>";

$datagrid= new DataTable;
$datagrid-> url="?";// not
$datagrid-> status_field="status"; //obligatory if 

$datagrid-> query(_TABLE_PREFIX_."center_competence");
$datagrid-> table_field_caption("id", "Номер");
$datagrid-> table_field_caption("order", "Порядок");
$datagrid-> table_field_caption("link", "Ссылка внешняя");


$datagrid-> table_field_caption("title_ru", "Название меню");

$datagrid-> table_field_caption("text_ru", "Текст ");
$datagrid-> column_hide_table("text_ru");
$datagrid-> field_type("add", "text_ru", "textarea");
$datagrid-> field_type("edit", "text_ru", "textarea");
$datagrid-> ckeditor_replace ("add", "text_ru");
$datagrid-> ckeditor_replace ("edit", "text_ru");


$datagrid-> table_field_caption("title_kg", "Менюнун аты");

$datagrid-> table_field_caption("text_kg", "Кыргызча текст");
$datagrid-> column_hide_table("text_kg");
$datagrid-> field_type("add", "text_kg", "textarea");
$datagrid-> field_type("edit", "text_kg", "textarea");
$datagrid-> ckeditor_replace ("add", "text_kg");
$datagrid-> ckeditor_replace ("edit", "text_kg");

$datagrid-> table_field_caption("title_eng", "Menu name");

$datagrid-> table_field_caption("text_eng", "English text");
$datagrid-> column_hide_table("text_eng");
$datagrid-> field_type("add", "text_eng", "textarea");
$datagrid-> field_type("edit", "text_eng", "textarea");
$datagrid-> ckeditor_replace ("add", "text_eng");
$datagrid-> ckeditor_replace ("edit", "text_eng");



$datagrid-> user_module_permissions =$USER_PERMISSIONS_ARRAY[$admin_id_module];

$datagrid-> display("table");

require_once _DATA_PATH_."bottom.php";
?>