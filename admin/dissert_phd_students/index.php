<?php 
require_once "../settings.php";
require_once _DATA_PATH_."top.php";
require_once _COMMON_DATA_PATH_."classes/ClassDataTable.php"; 

check_module_user_permission(array ("modules" =>$MODULES_ARRAY, "user_permissions" => $USER_PERMISSIONS_ARRAY), "dissert_phd_students");
$admin_id_module=get_module_id ($MODULES_ARRAY, "dissert_phd_students");

echo "<h4>Сведения аспирантов</h4>";

$datagrid= new DataTable;
$datagrid-> url="?";// not
$datagrid-> id_user="1"; // not
$datagrid-> status_field="status"; //obligatory if 
$datagrid-> user_field="id_user"; //obligatory if 

$datagrid-> query(_TABLE_PREFIX_."dissert_phd_students");
$datagrid-> table_field_caption("id", "Номер");
$datagrid-> table_field_caption("fio", "Ф.И.О. соискателя");
$datagrid-> table_field_caption("cypher", "Искомая ученая степень (шифр)");
$datagrid-> table_field_caption("citizenship", "Гражданство");
$datagrid-> table_field_caption("work_place", "Основная работа");
$datagrid-> column_hide_table("work_place");
$datagrid-> field_type("add", "work_place", "textarea");
$datagrid-> field_type("edit", "work_place", "textarea");
$datagrid-> ckeditor_replace ("add", "work_place");
$datagrid-> ckeditor_replace ("edit", "work_place");

$datagrid-> table_field_caption("mobile", "Телефон");
$datagrid-> table_field_caption("spin_code", "Персональный  идентификатор (SPIN-код(РИНЦ), Scopus Author ID, ORCID)");
$datagrid-> table_field_caption("date_registration", "Дата регистрации");
$datagrid-> table_field_caption("date_pre_defense", "Дата  предварительной защиты");
$datagrid-> table_field_caption("expert_commision", "Экспертная комиссия");
$datagrid-> column_hide_table("expert_commision");
$datagrid-> field_type("add", "expert_commision", "textarea");
$datagrid-> field_type("edit", "expert_commision", "textarea");
$datagrid-> ckeditor_replace ("add", "expert_commision");
$datagrid-> ckeditor_replace ("edit", "expert_commision");

$datagrid-> table_field_caption("opponents", "Оппоненты");
$datagrid-> column_hide_table("opponents");
$datagrid-> field_type("add", "opponents", "textarea");
$datagrid-> field_type("edit", "opponents", "textarea");
$datagrid-> ckeditor_replace ("add", "opponents");
$datagrid-> ckeditor_replace ("edit", "opponents");

$datagrid-> table_field_caption("organisation", "Ведущая организация");
$datagrid-> table_field_caption("address", "Контактные данные");
$datagrid-> table_field_caption("date_defense", "День защиты");


$datagrid-> user_module_permissions =$USER_PERMISSIONS_ARRAY[$admin_id_module];

$datagrid-> display("table");

require_once _DATA_PATH_."bottom.php";
?>