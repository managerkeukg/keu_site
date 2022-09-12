<?php 
require_once "../settings.php";
require_once _DATA_PATH_."top.php";
require_once _COMMON_DATA_PATH_."classes/ClassDataTable.php"; 

check_module_user_permission(array ("modules" =>$MODULES_ARRAY, "user_permissions" => $USER_PERMISSIONS_ARRAY), "resize_images");
$admin_id_module=get_module_id ($MODULES_ARRAY, "resize_images"); 

echo "<BR><BR><A href=\"resize_images.php?folder=1\" target=\"_blank\"> IMG/common/ 900 last 100 images</A>";
echo "<BR><BR><A href=\"resize_images.php?folder=1&id=1\" target=\"_blank\"> IMG/common/ 900 start from 1 by 100 images</A>";

echo "<BR><BR><A href=\"resize_images.php?folder=2\" target=\"_blank\"> IMG/news/ 100px last 100 images</A>";
echo "<BR><BR><A href=\"resize_images.php?folder=2&id=1\" target=\"_blank\"> IMG/news/ 100px start from 1 by 100 images</A>";

echo "<BR><BR><A href=\"resize_images.php?folder=3\" target=\"_blank\"> IMG/news/slider 900px last 100 images</A>";
echo "<BR><BR><A href=\"resize_images.php?folder=3&id=1\" target=\"_blank\"> IMG/news/slider 900px start from 1 by 100 images</A>";

echo "<BR><BR><A href=\"resize_images.php?folder=4\" target=\"_blank\"> IMG/calendar/ 100px last 100 images</A>";
echo "<BR><BR><A href=\"resize_images.php?folder=4&id=1\" target=\"_blank\"> IMG/calendar/ 100px start from 1 by 100 images</A>";


require_once _DATA_PATH_."bottom.php";
?>