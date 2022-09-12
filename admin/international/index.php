<?php 
require_once "../settings.php";
require_once _DATA_PATH_."top.php";
require_once _COMMON_DATA_PATH_."classes/ClassDataTable.php"; 

check_module_user_permission(array ("modules" =>$MODULES_ARRAY, "user_permissions" => $USER_PERMISSIONS_ARRAY), "international");
$admin_id_module=get_module_id ($MODULES_ARRAY, "international");

echo "<h4>Международная деятельность</h4>";
echo "фото должно быть размером 358(ширина)x240(высота)<br><br>";

$datagrid= new DataTable;
$datagrid-> url="?";// not
$datagrid-> id_user="1"; // not
$datagrid-> status_field="status"; //obligatory if 
$datagrid-> user_field="id_user"; //obligatory if 

$datagrid-> query(_TABLE_PREFIX_."international");
$datagrid-> table_field_caption("id", "Номер");
$datagrid-> table_field_caption("order", "Порядок");
$datagrid-> table_field_caption("parent", "Родитель");
$datagrid-> foreign_key ("parent", _TABLE_PREFIX_."international", "name_ru", "id");

$datagrid-> table_field_caption("photo", "Фото");
$datagrid-> convertcolumn_toimage ("photo", "../../images/international/", "50");

$datagrid-> table_field_caption("link", "Внешняя ссылка");
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

/*
$datagrid-> addcolumn("submenu", "<a href=\"news_images.php\"> Подменю </a>");
$datagrid-> table_field_caption("submenu", " Подменю ");
$datagrid-> column_value("submenu", '<a href="submenu.php?id={{id}}">=></a>');
*/

$datagrid-> user_module_permissions =$USER_PERMISSIONS_ARRAY[$admin_id_module];

$datagrid-> display("table");

require_once _DATA_PATH_."bottom.php";
?>