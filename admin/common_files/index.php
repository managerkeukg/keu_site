<?php 
require_once "../settings.php";
require_once _DATA_PATH_."top.php";
require_once _COMMON_DATA_PATH_."classes/ClassDataTable.php"; 

check_module_user_permission(array ("modules" =>$MODULES_ARRAY, "user_permissions" => $USER_PERMISSIONS_ARRAY), "common_files");
$admin_id_module=get_module_id ($MODULES_ARRAY, "common_files");

//require_once _DATA_PATH_."functions/f_is_int.php";
//is_int_obligatory ($_GET['id']);

echo "<a href=\"index.php\">Назад</a>";
echo "<h4>Файлы</h4>"; 
echo "Файлы<br><br>";

$datagrid= new DataTable;
$datagrid-> url="?id=".$id_news;// not
$datagrid-> id_user="1"; // not
$datagrid-> status_field="status"; //obligatory if 
$datagrid-> user_field="id_user"; //obligatory if 

$datagrid-> query(_TABLE_PREFIX_."common_files");
$datagrid-> table_field_caption("id", "Номер");
$datagrid-> table_field_caption("name", "Название файла");
$datagrid-> table_field_caption("file", "Путь к файлу на сервере");

$datagrid-> addcolumn("file_add", "<a href=\"news_images.php\">  File <BR> Add </a>");
$datagrid-> table_field_caption("file_add", " Добавить или <BR> Изменить Файл ");
$datagrid-> column_value("file_add", '<a href="file.php?id={{id}}" target="_blank">=></a>');

//$datagrid-> column_value("images_url", '{{image}}'); // http://www.keu.kg/img/common/{{image}}


$datagrid-> user_module_permissions =$USER_PERMISSIONS_ARRAY[$admin_id_module];

$datagrid-> display("table");

require_once _DATA_PATH_."bottom.php";
?>