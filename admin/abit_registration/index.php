<?php 
require_once "../settings.php";
require_once _DATA_PATH_."top.php";
require_once _COMMON_DATA_PATH_."classes/ClassDataTable.php"; 

check_module_user_permission(array ("modules" =>$MODULES_ARRAY, "user_permissions" => $USER_PERMISSIONS_ARRAY), "abit_registration");
$admin_id_module=get_module_id ($MODULES_ARRAY, "abit_registration"); 

echo "<h4>Регистрация абитуриентов</h4>";

$array_sex= array();
$array_sex= array ('1'=>'Мужской', '2'=>'Женский'); 
//$array_sex['1'];     

$datagrid= new DataTable;
$datagrid-> url="?";// not
$datagrid-> id_user="1"; // not
$datagrid-> status_field="status"; //obligatory if 

$datagrid-> query(_TABLE_PREFIX_."online_registration", " AND `rDate`>='2020-01-01' ");
$datagrid-> table_field_caption("id", "Номер");

$datagrid-> table_field_caption("name", "Имя");
$datagrid-> table_field_caption("surname", "Фамилия");
$datagrid-> table_field_caption("patronymic", "Отчество");
$datagrid-> table_field_caption("birthdate", "Дата рождения");
$datagrid-> table_field_caption("sex", "Пол");
$datagrid-> foreign_key ("sex", _TABLE_PREFIX_."type_sex", "name_ru", "id");

$datagrid-> table_field_caption("level", "Текущий класс обучения");
$datagrid-> table_field_caption("graduate_from", "Место окончания средней школы (Страна, село/город, № средней школы и.т.д)");
$datagrid-> table_field_caption("graduate_year", "Год окончания средней школы");
$datagrid-> table_field_caption("attestate", "Номер и серия аттестата, диплома или справки и.т.д.");
$datagrid-> table_field_caption("profile", "Профиль");
$datagrid-> foreign_key ("profile", _TABLE_PREFIX_."profile", "name_ru", "id");

$datagrid-> table_field_caption("citizenship", "Гражданство");
$datagrid-> foreign_key ("citizenship", _TABLE_PREFIX_."type_citizenship", "name_ru", "id");
$datagrid-> table_field_caption("passport_data", "Паспортные данные");
$datagrid-> table_field_caption("mobile", "Контактный телефон");
$datagrid-> table_field_caption("email", "Почтовый адрес (e-mail)");

$datagrid-> display("table");

require_once _DATA_PATH_."bottom.php";
?>