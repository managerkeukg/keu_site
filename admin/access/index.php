<?php 
require_once "../settings.php";
require_once _DATA_PATH_."top.php";
require_once _COMMON_DATA_PATH_."classes/ClassDataTable.php"; 

check_module_user_permission(array ("modules" =>$MODULES_ARRAY, "user_permissions" => $USER_PERMISSIONS_ARRAY), "access");
$admin_id_module=get_module_id ($MODULES_ARRAY, "access"); //echo $USER_PERMISSIONS_ARRAY[$admin_id_module];

$datagrid= new DataTable;
$datagrid-> url="?";
$datagrid-> id_user="1";
$datagrid-> status_field="status";
$datagrid-> user_field="id_user";

$datagrid-> query(_TABLE_PREFIX_._USER_PREFIX_);
$datagrid-> table_field_caption("id", "Номер");
$datagrid-> table_field_caption("name", "Имя");
$datagrid-> table_field_caption("surname", "Фамилия");
$datagrid-> table_field_caption("patronymic", "Отчество");
$datagrid-> table_field_caption("login", "Логин");
$datagrid-> table_field_caption("password", "Пароль");
$datagrid-> table_field_caption("edit", "");
$datagrid-> table_field_caption("delete", "");
$datagrid-> addcolumn("access", "<a href=\"modules.php\">Модули</a>");
$datagrid-> table_field_caption("access", "");
$datagrid-> column_value("access", '<a href="modules.php?id={{id}}">Модули</a>');

$datagrid-> user_module_permissions =$USER_PERMISSIONS_ARRAY[$admin_id_module];

$datagrid-> display("table");

require_once _DATA_PATH_."bottom.php";
?>