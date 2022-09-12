<?php 
require_once "../settings.php";
require_once _DATA_PATH_."top.php";
require_once _COMMON_DATA_PATH_."classes/ClassDataTable.php"; 

check_module_user_permission(array ("modules" =>$MODULES_ARRAY, "user_permissions" => $USER_PERMISSIONS_ARRAY), "news");
$admin_id_module=get_module_id ($MODULES_ARRAY, "news");

require_once _DATA_PATH_."functions/f_is_int.php";
is_int_obligatory ($_GET['id']);

echo "<a href=\"index.php\">Назад</a>";
echo "<h4>Фотогалерея новости</h4>"; 
echo "фото должно быть размером max 800(ширина)x600(высота)<br><br>";
$id_news=$_GET['id'];

$datagrid= new DataTable;
$datagrid-> url="?id=".$id_news;// not
$datagrid-> id_user="1"; // not
$datagrid-> status_field="status"; //obligatory if 
$datagrid-> user_field="id_user"; //obligatory if 

$datagrid-> query(_TABLE_PREFIX_."news_files", "AND `news_id`='$id_news'");
$datagrid-> table_field_caption("id", "Номер");
$datagrid-> table_field_caption("name_ru", "Название рисунка");
$datagrid-> table_field_caption("name_kg", "Суроттун аты");
$datagrid-> table_field_caption("name_eng", "Images name");
$datagrid-> table_field_caption("news_id", "Новость");
$datagrid-> foreign_key ("news_id", _TABLE_PREFIX_."news", "ru_title", "id");

$datagrid-> table_field_caption("ext", "Это поле не трогать!!!");
$datagrid-> table_field_caption("image", "Рисунок");
$datagrid-> convertcolumn_toimage ("image", "../../img/news/news/", "50");


$datagrid-> user_module_permissions =$USER_PERMISSIONS_ARRAY[$admin_id_module];

$datagrid-> display("table");

require_once _DATA_PATH_."bottom.php";
?>