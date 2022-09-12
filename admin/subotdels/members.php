<?php 
require_once "../settings.php";
require_once _DATA_PATH_."top.php";
require_once _COMMON_DATA_PATH_."classes/ClassDataTable.php"; 

check_module_user_permission(array ("modules" =>$MODULES_ARRAY, "user_permissions" => $USER_PERMISSIONS_ARRAY), "subotdels");
$admin_id_module=get_module_id ($MODULES_ARRAY, "subotdels");

require_once _DATA_PATH_."functions/f_is_int.php";
is_int_obligatory ($_GET['id']);

echo "<a href=\"index.php\">Назад</a>";
echo "<h4>Контактные лица</h4>"; 
echo "фото должно быть размером 76(ширина)x94(высота)<br><br>";
$id_subotdel=$_GET['id'];

$datagrid= new DataTable;
$datagrid-> url="?id=".$id_subotdel;// not
$datagrid-> id_user="1"; // not
$datagrid-> status_field="status"; //obligatory if 
$datagrid-> user_field="id_user"; //obligatory if 

$datagrid-> query(_TABLE_PREFIX_."members", "AND `parent_subotdel`='$id_subotdel'");
$datagrid-> table_field_caption("id", "Номер");
$datagrid-> table_field_caption("parent_subotdel", "Отдел");
$datagrid-> foreign_key ("parent_subotdel", _TABLE_PREFIX_."subotdels", "ru", "id");

$datagrid-> table_field_caption("email", "Почта");
$datagrid-> table_field_caption("phone1", "Телефон 1");
$datagrid-> table_field_caption("phone2", "Телефон 2");
$datagrid-> table_field_caption("photo", "Фото");
$datagrid-> convertcolumn_toimage ("photo", "../../img/contacts/", "50");

$datagrid-> table_field_caption("name_ru", "Имя");
$datagrid-> table_field_caption("patronymic_ru", "Отчество");
$datagrid-> table_field_caption("surname_ru", "Фамилия");
$datagrid-> table_field_caption("duty_ru", "Должность");

$datagrid-> table_field_caption("address_ru", "Адрес");
$datagrid-> field_type("add", "address_ru", "textarea");
$datagrid-> field_type("edit", "address_ru", "textarea");
$datagrid-> ckeditor_replace ("add", "address_ru");
$datagrid-> ckeditor_replace ("edit", "address_ru");

$datagrid-> table_field_caption("name_kg", "Аты");
$datagrid-> table_field_caption("patronymic_kg", "Отчествосу");
$datagrid-> table_field_caption("surname_kg", "Фамилиясы");
$datagrid-> table_field_caption("duty_kg", "Должность");

$datagrid-> table_field_caption("address_kg", "Адрес");
$datagrid-> field_type("add", "address_kg", "textarea");
$datagrid-> field_type("edit", "address_kg", "textarea");
$datagrid-> ckeditor_replace ("add", "address_kg");
$datagrid-> ckeditor_replace ("edit", "address_kg");

$datagrid-> table_field_caption("name_eng", "Name");
$datagrid-> table_field_caption("patronymic_eng", "Patronymic");
$datagrid-> table_field_caption("surname_eng", "Surname");
$datagrid-> table_field_caption("duty_eng", "Duty");

$datagrid-> table_field_caption("address_eng", "Address");
$datagrid-> field_type("add", "address_eng", "textarea");
$datagrid-> field_type("edit", "address_eng", "textarea");
$datagrid-> ckeditor_replace ("add", "address_eng");
$datagrid-> ckeditor_replace ("edit", "address_eng");

$datagrid-> user_module_permissions =$USER_PERMISSIONS_ARRAY[$admin_id_module];

$datagrid-> display("table");

require_once _DATA_PATH_."bottom.php";
?>