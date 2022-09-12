<?php 
require_once "../settings.php";
require_once _DATA_PATH_."top.php";

check_module_user_permission(array ("modules" =>$MODULES_ARRAY, "user_permissions" => $USER_PERMISSIONS_ARRAY), "settings");
$admin_id_module=get_module_id ($MODULES_ARRAY, "settings");

echo "<h4>Настройки</h4>";
?>
<BR><a href="menu.php" target="_blank">MENU</a>
<BR><a href="header.php" target="_blank">Шапка сайта</a>
<BR><a href="footer.php" target="_blank">Низ сайта</a>
<BR><a href="frontpage.php" target="_blank">Фронт меню</a>
<BR><a href="other.php" target="_blank">Остальное</a>
<?php
require_once _DATA_PATH_."bottom.php";
?>