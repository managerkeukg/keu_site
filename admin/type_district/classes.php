<?php 
require_once "../settings.php";
require_once _DATA_PATH_."top.php";
require_once _COMMON_DATA_PATH_."classes/ClassDataTable.php"; 

check_module_user_permission(array ("modules" =>$MODULES_ARRAY, "user_permissions" => $USER_PERMISSIONS_ARRAY), "type_district");
$admin_id_module=get_module_id ($MODULES_ARRAY, "type_district"); 

require_once _DATA_PATH_."functions/f_is_int.php";
is_int_obligatory ($_GET['id']);
$id=$_GET['id'];
//require_once _COMMON_DATA_PATH_."functions/f_get_value.php";
//$profile=get_value (_TABLE_PREFIX_."groups", "name", $id);

echo "<h4>Классы района &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4>";

$datagrid= new DataTable;
$datagrid-> url="classes.php?id=".$id;// not
$datagrid-> id_user="1"; // not
$datagrid-> status_field="status"; //obligatory if 

$datagrid-> query(_TABLE_PREFIX_."konkurs_class", " AND (`district`=".$id." ) "); 
$datagrid-> table_field_caption("id", "Номер");
$datagrid-> table_field_caption("district", "Район");
$datagrid-> foreign_key ("district", _TABLE_PREFIX_."type_district", "name_ru", "id");
$datagrid-> table_field_caption("class", "Класс");


$datagrid-> table_field_caption("text", "Текст");
$datagrid-> column_hide_table("text");
$datagrid-> field_type("add", "text", "textarea");
$datagrid-> field_type("edit", "text", "textarea");
$datagrid-> ckeditor_replace ("add", "text");
$datagrid-> ckeditor_replace ("edit", "text");
 
$datagrid-> user_module_permissions =$USER_PERMISSIONS_ARRAY[$admin_id_module];

$datagrid-> display("table");

require_once _DATA_PATH_."bottom.php";
?>