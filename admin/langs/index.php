<?php 
require_once "../settings.php";
require_once _DATA_PATH_."top.php";
require_once _COMMON_DATA_PATH_."classes/ClassDataTable.php"; 

check_module_user_permission(array ("modules" =>$MODULES_ARRAY, "user_permissions" => $USER_PERMISSIONS_ARRAY), "langs");
$admin_id_module=get_module_id ($MODULES_ARRAY, "langs"); 

echo "<h4>Языки</h4>";




require_once _DATA_PATH_."bottom.php";
?>