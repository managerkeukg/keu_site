<?php 
require_once "../settings.php";
require_once _DATA_PATH_."top.php";
require_once _COMMON_DATA_PATH_."classes/ClassDataTable.php"; 

check_module_user_permission(array ("modules" =>$MODULES_ARRAY, "user_permissions" => $USER_PERMISSIONS_ARRAY), "directions");
$admin_id_module=get_module_id ($MODULES_ARRAY, "directions"); 

echo "<h4>Направления</h4>";

$datagrid= new DataTable;
$datagrid-> url="?id=".$id_spec;// not
$datagrid-> status_field="status"; //obligatory if 

$datagrid-> query(_TABLE_PREFIX_."directions");
$datagrid-> table_field_caption("id", "Номер");

$datagrid-> table_field_caption("edu_institution", "Учебное заведение");
$datagrid-> foreign_key ("edu_institution", _TABLE_PREFIX_."type_edu_institutions", "name_ru", "id");

$datagrid-> table_field_caption("name_ru", "Направление");

$datagrid-> addcolumn("profiles", "<a href=\"news_images.php\"> Профили </a>");
$datagrid-> table_field_caption("profiles", " Профили ");
$datagrid-> column_value("profiles", '<a href="profiles.php?id={{id}}" target="_blank">=></a>');


$datagrid-> user_module_permissions =$USER_PERMISSIONS_ARRAY[$admin_id_module];

$datagrid-> display("table");

require_once _DATA_PATH_."bottom.php";
?>