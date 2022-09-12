<?php 
require_once "../settings.php";
require_once _DATA_PATH_."top.php";
require_once _COMMON_DATA_PATH_."classes/ClassDataTable.php"; 
require_once _COMMON_DATA_PATH_."classes/ClassTableQuery.php";
require_once _COMMON_DATA_PATH_."functions/resize_function.php";

check_module_user_permission(array ("modules" =>$MODULES_ARRAY, "user_permissions" => $USER_PERMISSIONS_ARRAY), "staff");
$admin_id_module=get_module_id ($MODULES_ARRAY, "staff");

require_once _DATA_PATH_."functions/f_is_int.php";
is_int_obligatory ($_GET['id']);

echo "<a href=\"index.php\">Назад</a>";
echo "<h4>Изменение размера рисунка</h4>"; 
echo "Фото должно быть размером 180(ширина)x245(высота)<br><br>";
$id_image=$_GET['id'];

$object_image = new TableQuery;
$array_image=$object_image-> query("SELECT * FROM `"._TABLE_PREFIX_."staff"."` where  `id`=".$id_image); // LIMIT 0, 5

if (isset($array_image) AND !empty($array_image))
{
	//	echo "<pre>"; print_r($array_image); echo "</pre>";
	//echo "../../img/staff/".$array_image['0']['photo'];
	if (resizeimg("../../img/staff/".$array_image['0']['photo'], "../../img/staff/".$array_image['0']['photo'], "180", "245")) 
	{ echo "<BR>Размеры рисунка были успешно изменены ";} else { echo "<BR>Невозможно изменить размеры рисунка ";}
}

require_once _DATA_PATH_."bottom.php";
?>