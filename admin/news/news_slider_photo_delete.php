<?php 
require_once "../settings.php";
require_once _DATA_PATH_."top.php";
require_once _COMMON_DATA_PATH_."classes/ClassDataTable.php"; 

check_module_user_permission(array ("modules" =>$MODULES_ARRAY, "user_permissions" => $USER_PERMISSIONS_ARRAY), "news");
$admin_id_module=get_module_id ($MODULES_ARRAY, "news");

require_once _DATA_PATH_."functions/f_is_int.php";
is_int_obligatory ($_GET['id']);

echo "<a href=\"index.php\">Назад</a>";
echo "<h4>Удаление рисунка слайдера</h4>"; 
$id_news=$_GET['id'];

echo $id_news;
$query="update `keu_news` SET 
				   image_slider=''
				   WHERE `id`='".$id_news."'";
    $cat = mysql_query($query);
  if($cat) 
         {
	        echo "<HTML><HEAD><META HTTP-EQUIV='Refresh' CONTENT='0; URL=index.php'></HEAD></HTML>";
  		 }
      else {exit(mysql_error());}

$datagrid-> user_module_permissions =$USER_PERMISSIONS_ARRAY[$admin_id_module];

require_once _DATA_PATH_."bottom.php";
?>