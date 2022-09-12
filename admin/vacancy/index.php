<?php 
require_once "../settings.php";
require_once _DATA_PATH_."top.php";
require_once _COMMON_DATA_PATH_."classes/ClassDataTable.php"; 

check_module_user_permission(array ("modules" =>$MODULES_ARRAY, "user_permissions" => $USER_PERMISSIONS_ARRAY), "vacancy");
$admin_id_module=get_module_id ($MODULES_ARRAY, "vacancy"); 

echo "<h4>Вакансии КЭУ. Отдел кадров</h4>";

$datagrid= new DataTable;
$datagrid-> url="?";// not
$datagrid-> id_user="1"; // not
$datagrid-> status_field="status"; //obligatory if 
$datagrid-> user_field="id_user"; //obligatory if 

$datagrid-> query(_TABLE_PREFIX_."vacancy");
$datagrid-> table_field_caption("id", "Номер");
$datagrid-> table_field_caption("ru_title", "Заголовок");

$datagrid-> table_field_caption("ru_text", "Текст новости");
$datagrid-> column_hide_table("ru_text");
$datagrid-> field_type("add", "ru_text", "textarea");
$datagrid-> field_type("edit", "ru_text", "textarea");
$datagrid-> ckeditor_replace ("add", "ru_text");
$datagrid-> ckeditor_replace ("edit", "ru_text");

$datagrid-> table_field_caption("kg_title", "Аталышы");

$datagrid-> table_field_caption("kg_text", "Кыргызча Текст ");
$datagrid-> column_hide_table("kg_text");
$datagrid-> field_type("add", "kg_text", "textarea");
$datagrid-> field_type("edit", "kg_text", "textarea");
$datagrid-> ckeditor_replace ("add", "kg_text");
$datagrid-> ckeditor_replace ("edit", "kg_text");

$datagrid-> table_field_caption("eng_title", "Title");

$datagrid-> table_field_caption("eng_text", "English text");
$datagrid-> column_hide_table("eng_text");
$datagrid-> field_type("add", "eng_text", "textarea");
$datagrid-> field_type("edit", "eng_text", "textarea");
$datagrid-> ckeditor_replace ("add", "eng_text");
$datagrid-> ckeditor_replace ("edit", "eng_text");


$datagrid-> user_module_permissions =$USER_PERMISSIONS_ARRAY[$admin_id_module];

$datagrid-> display("table");

require_once _DATA_PATH_."bottom.php";
?>