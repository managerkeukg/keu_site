<?php 
require_once "../settings.php";
require_once _DATA_PATH_."top.php";
require_once _COMMON_DATA_PATH_."classes/ClassDataTable.php"; 

check_module_user_permission(array ("modules" =>$MODULES_ARRAY, "user_permissions" => $USER_PERMISSIONS_ARRAY), "news");
$admin_id_module=get_module_id ($MODULES_ARRAY, "news"); 

echo "<h4>Новости</h4>";

$datagrid= new DataTable;
$datagrid-> url="?";// not
$datagrid-> id_user="1"; // not
$datagrid-> status_field="status"; //obligatory if 
$datagrid-> user_field="id_user"; //obligatory if 

$datagrid-> query(_TABLE_PREFIX_."news");
$datagrid-> table_field_caption("id", "Номер");
$datagrid-> table_field_caption("ru_title", "Заголовок");
$datagrid-> table_field_caption("ru_text_short", "Краткий текст");

$datagrid-> table_field_caption("ru_text", "Текст новости");
$datagrid-> column_hide_table("ru_text");
$datagrid-> field_type("add", "ru_text", "textarea");
$datagrid-> field_type("edit", "ru_text", "textarea");
$datagrid-> ckeditor_replace ("add", "ru_text");
$datagrid-> ckeditor_replace ("edit", "ru_text");


$datagrid-> table_field_caption("kg_title", "Жанылык темасы");
$datagrid-> table_field_caption("kg_text_short", "Кыскача текст");

$datagrid-> table_field_caption("kg_text", "Жанылык тексти");
$datagrid-> column_hide_table("kg_text");
$datagrid-> field_type("add", "kg_text", "textarea");
$datagrid-> field_type("edit", "kg_text", "textarea");
$datagrid-> ckeditor_replace ("add", "kg_text");
$datagrid-> ckeditor_replace ("edit", "kg_text");

$datagrid-> table_field_caption("eng_title", "Title");
$datagrid-> table_field_caption("eng_text_short", "Short text");

$datagrid-> table_field_caption("eng_text", "News text");
$datagrid-> column_hide_table("eng_text");
$datagrid-> field_type("add", "eng_text", "textarea");
$datagrid-> field_type("edit", "eng_text", "textarea");
$datagrid-> ckeditor_replace ("add", "eng_text");
$datagrid-> ckeditor_replace ("edit", "eng_text");


$datagrid-> table_field_caption("image", "Фото");
$datagrid-> convertcolumn_toimage ("image", "../../img/news/", "50");

$datagrid-> table_field_caption("image_slider", "Фото На слайдер");
$datagrid-> convertcolumn_toimage ("image_slider", "../../img/news/slider/", "50");

$datagrid-> addcolumn("image_slider_delete", "<a href=\"news_images.php\"> Delete <BR>Slider <BR> Photo </a>");
$datagrid-> table_field_caption("image_slider_delete", " Delete <BR>Slider <BR> Photo  ");
$datagrid-> column_value("image_slider_delete", '<a href="news_slider_photo_delete.php?id={{id}}" target="_blank">=></a>');


$datagrid-> table_field_caption("date", "Дата");

$datagrid-> addcolumn("news_images", "<a href=\"news_images.php\"> Фото<BR>галерея </a>");
$datagrid-> table_field_caption("news_images", " Фото<BR>галерея ");
$datagrid-> column_value("news_images", '<a href="news_images.php?id={{id}}">=></a>');

$datagrid-> user_module_permissions =$USER_PERMISSIONS_ARRAY[$admin_id_module];

$datagrid-> display("table");

require_once _DATA_PATH_."bottom.php";
?>