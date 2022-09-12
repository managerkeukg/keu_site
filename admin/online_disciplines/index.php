<?php 
require_once "../settings.php";
require_once _DATA_PATH_."top.php";
require_once _COMMON_DATA_PATH_."classes/ClassDataTable.php"; 

check_module_user_permission(array ("modules" =>$MODULES_ARRAY, "user_permissions" => $USER_PERMISSIONS_ARRAY), "online_disciplines");
$admin_id_module=get_module_id ($MODULES_ARRAY, "online_disciplines"); //echo $USER_PERMISSIONS_ARRAY[$admin_id_module];
///echo "<pre>USER MODULE PERMISSIONS "; print_r($USER_PERMISSIONS_ARRAY[$admin_id_module]) ; echo "</pre>";
echo "<h4>Дисциплины</h4>";

$datagrid= new DataTable;
$datagrid-> url="?";// not
$datagrid-> status_field="status"; //obligatory if 

$datagrid-> query(_TABLE_PREFIX_."online_disciplines");
$datagrid-> table_field_caption("id", "Номер");
$datagrid-> table_field_caption("direction", "Направление");
$datagrid-> foreign_key ("direction", _TABLE_PREFIX_."online_directions", "name_ru", "id");
$datagrid-> table_field_caption("name_ru", "Название дисциплины");
$datagrid-> table_field_caption("lector", "Преподаватель");
/*
$datagrid-> table_field_caption("link", "Внешняя ссылка");
$datagrid-> table_field_caption("edu_type", "Тип обучения");
$datagrid-> foreign_key ("edu_type", _TABLE_PREFIX_."type_edu", "name_ru", "id");
$datagrid-> table_field_caption("name_ru", "Название");
$datagrid-> table_field_caption("title_short_ru", "Краткое заглавие");
$datagrid-> table_field_caption("next_ru", "Текст далее ");

$datagrid-> table_field_caption("text_ru", "Текст");
$datagrid-> column_hide_table("text_ru");
$datagrid-> field_type("add", "text_ru", "textarea");
$datagrid-> field_type("edit", "text_ru", "textarea");
$datagrid-> ckeditor_replace ("add", "text_ru");
$datagrid-> ckeditor_replace ("edit", "text_ru");

$datagrid-> table_field_caption("name_kg", "аты");
$datagrid-> table_field_caption("title_short_kg", "Кыска текст");
$datagrid-> table_field_caption("next_kg", "Дагы");

$datagrid-> table_field_caption("text_kg", "Текст");
$datagrid-> column_hide_table("text_kg");
$datagrid-> field_type("add", "text_kg", "textarea");
$datagrid-> field_type("edit", "text_kg", "textarea");
$datagrid-> ckeditor_replace ("add", "text_kg");
$datagrid-> ckeditor_replace ("edit", "text_kg");


$datagrid-> table_field_caption("name_eng", "Name ");
$datagrid-> table_field_caption("title_short_eng", "Short text ");
$datagrid-> table_field_caption("next_eng", "Next text ");

$datagrid-> table_field_caption("text_eng", "Текст");
$datagrid-> column_hide_table("text_eng");
$datagrid-> field_type("add", "text_eng", "textarea");
$datagrid-> field_type("edit", "text_eng", "textarea");
$datagrid-> ckeditor_replace ("add", "text_eng");
$datagrid-> ckeditor_replace ("edit", "text_eng");

$datagrid-> addcolumn("profiles", "<a href=\"../profiles/index.php\">Профили</a>");
$datagrid-> table_field_caption("profiles", "Профили");
$datagrid-> column_value("profiles", '<a href="../profiles/index.php?id={{id}}">=></a>');
*/
$datagrid-> user_module_permissions =$USER_PERMISSIONS_ARRAY[$admin_id_module];


$datagrid-> display("table");

require_once _DATA_PATH_."bottom.php";
?>