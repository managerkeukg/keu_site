<?php
require_once "../security.php";
define( '_ID_USER_', $_COOKIE['id']);
define( '_DATA_PATH_', "../../kel_data_admin/"); 
define( '_COMMON_DATA_PATH_', "../../common_data/"); 
define( '_TABLE_PREFIX_', "keu_");
define( '_USER_PREFIX_', "admin");

require_once _COMMON_DATA_PATH_."config.php";
require_once _DATA_PATH_."functions/CheckModuleUserPermission.php";
require_once _COMMON_DATA_PATH_."functions/f_iden_module.php";

$query = "SELECT * FROM  `keu_admin` WHERE  `id`="._ID_USER_." AND `status`=1;";
$cat=mysql_query($query);
if($cat) 
{ 
  	if (mysql_num_rows($cat)> 0)
    { 
    	//ok 
	} else { exit ("<h3><font color=red>нет прав доступа у данного пользователя. Или недостаточно дискового пространства. </font></h3>");}
} else {
	exit("Ошибка при изьятии данных".mysql_error()); //.mysql_error() 
}
?>