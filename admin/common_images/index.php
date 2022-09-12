<?php 
require_once "../settings.php";
require_once _DATA_PATH_."top.php";
require_once _COMMON_DATA_PATH_."classes/ClassDataTable.php"; 

check_module_user_permission(array ("modules" =>$MODULES_ARRAY, "user_permissions" => $USER_PERMISSIONS_ARRAY), "common_images");
$admin_id_module=get_module_id ($MODULES_ARRAY, "common_images");

//require_once _DATA_PATH_."functions/f_is_int.php";
//is_int_obligatory ($_GET['id']);

echo "<a href=\"index.php\">Назад</a>";
echo "<h4>Изображения</h4>"; 
echo "фото должно быть размером max 800(ширина)x600(высота)<br><br>";

$datagrid= new DataTable;
$datagrid-> url="?id=".$id_news;// not
$datagrid-> id_user="1"; // not
$datagrid-> status_field="status"; //obligatory if 
$datagrid-> user_field="id_user"; //obligatory if 

$datagrid-> query(_TABLE_PREFIX_."common_images");
$datagrid-> table_field_caption("id", "Номер");
$datagrid-> table_field_caption("name_ru", "Название рисунка");
$datagrid-> table_field_caption("name_kg", "Суроттун аты");
$datagrid-> table_field_caption("name_eng", "Images name");

$datagrid-> addcolumn("images_url", "Ссылка");
$datagrid-> table_field_caption("images_url", " Ссылка ");
$datagrid-> column_value("images_url", 'http://www.keu.kg/img/common/{{image}}'); // http://www.keu.kg/img/common/{{image}}
 
$datagrid-> addcolumn("image_delete", "Удалить  рисунок");
$datagrid-> table_field_caption("image_delete", " Удалить  рисунок ");
$datagrid-> column_value("image_delete", '<a href="del.php?id={{id}}" target="_blank" onclick="return confirm(\'Вы уверены, что хотите удалить рисунок?\');">{{image}}</a>'); // http://www.keu.kg/img/common/{{image}}

$datagrid-> table_field_caption("image", "Рисунок");
$datagrid-> convertcolumn_toimage ("image", "../../img/common/", "50");


/*
$datagrid-> addcolumn("images_url", "Ссылка");
$datagrid-> table_field_caption("images_url", " Ссылка ");
$datagrid-> column_value("images_url", '{{image}}'); // http://www.keu.kg/img/common/{{image}}
*/

$datagrid-> user_module_permissions =$USER_PERMISSIONS_ARRAY[$admin_id_module];

$datagrid-> display("table");

require_once _DATA_PATH_."bottom.php";
?>