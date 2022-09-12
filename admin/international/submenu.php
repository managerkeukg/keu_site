<?php 
require_once "../settings.php";
require_once _DATA_PATH_."top.php";
require_once _COMMON_DATA_PATH_."classes/ClassDataTable.php"; 

check_module_user_permission(array ("modules" =>$MODULES_ARRAY, "user_permissions" => $USER_PERMISSIONS_ARRAY), "international");
$admin_id_module=get_module_id ($MODULES_ARRAY, "international");

require_once _DATA_PATH_."functions/f_is_int.php";
is_int_obligatory ($_GET['id']);

echo "<a href=\"index.php\">Назад</a>";
echo "<h4>Подменю</h4>"; 
$parent=$_GET['id'];

$datagrid= new DataTable;
$datagrid-> url="?id=".$parent;// not
$datagrid-> id_user="1"; // not
$datagrid-> status_field="status"; //obligatory if 
$datagrid-> user_field="id_user"; //obligatory if 

$datagrid-> query(_TABLE_PREFIX_."international_submenu", "AND `parent`='$parent'");
$datagrid-> table_field_caption("id", "Номер");
$datagrid-> table_field_caption("order", "Порядок");
$datagrid-> table_field_caption("name_ru", "Название ");

$datagrid-> table_field_caption("text_ru", "Русский текст");
$datagrid-> column_hide_table("text_ru");
$datagrid-> field_type("add", "text_ru", "textarea");
$datagrid-> field_type("edit", "text_ru", "textarea");
$datagrid-> ckeditor_replace ("add", "text_ru");
$datagrid-> ckeditor_replace ("edit", "text_ru");


$datagrid-> table_field_caption("name_kg", "аты");

$datagrid-> table_field_caption("text_kg", "Кыргызча тест");
$datagrid-> column_hide_table("text_kg");
$datagrid-> field_type("add", "text_kg", "textarea");
$datagrid-> field_type("edit", "text_kg", "textarea");
$datagrid-> ckeditor_replace ("add", "text_kg");
$datagrid-> ckeditor_replace ("edit", "text_kg");


$datagrid-> table_field_caption("name_eng", "Name");
$datagrid-> table_field_caption("text_eng", "Text ");
$datagrid-> column_hide_table("text_eng");
$datagrid-> field_type("add", "text_eng", "textarea");
$datagrid-> field_type("edit", "text_eng", "textarea");
$datagrid-> ckeditor_replace ("add", "text_eng");
$datagrid-> ckeditor_replace ("edit", "text_eng");

$datagrid-> foreign_key ("parent", _TABLE_PREFIX_."international", "name_ru", "id");


$datagrid-> user_module_permissions =$USER_PERMISSIONS_ARRAY[$admin_id_module];

$datagrid-> display("table");

require_once _DATA_PATH_."bottom.php";
?>