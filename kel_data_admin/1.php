<?php
include "security.php";
require_once _DATA_PATH_."config.php";
echo "Привет!!!  ".$_COOKIE['name']."   ".$_COOKIE['surname'];
?>
<div class="grid_3 blq-navegacion-lateral">	
<div class="caixa">
	<ul>
			<li class="titulo" >Главная</li>														  
        	   <li ><a href="../logout.php">Выход</a>
    </ul>
		
</div></div>

<?php
$MODULES_ARRAY="";
require_once _COMMON_DATA_PATH_."classes/classUserAccess.php"; //$USER_ACCESS_PER=array ("user" => _ID_USER_ ); echo   _ID_USER_;
$user_perm_obj = new UserAccess ;
$user_perm_obj-> table_prefix=_TABLE_PREFIX_; 
$user_perm_obj-> user_prefix=_USER_PREFIX_; 
$MODULES_ARRAY= $user_perm_obj-> getModules();
$USER_PERMISSIONS_ARRAY= $user_perm_obj-> getUserPermissions(_ID_USER_);
$user_perm_obj-> showUserModules (array ("user" =>_ID_USER_, "perm_array"=>$user_perm_array)) ;
///echo "<pre> USER PERMISSIONS "; print_r($USER_PERMISSIONS_ARRAY) ; echo "</pre>";
///echo "<pre>MODULES_ARRAY "; print_r($MODULES_ARRAY) ; echo "</pre>";
        
?>
<style>
.menu_1 ul, li 
{ margin:0; padding:0;}
/*CAIXAS LATERAIS*/

.menu_1 { padding:0;}
.menu_1 .caixa, .caixa { margin: 5px 0;}
.menu_1 .caixa ul li.titulo, .menu_1 .caixa li.titulo, .menu_1 .caixa .titulo 
     { background:#006 url(../../kel_data/style/bg_azul.gif)  no-repeat; color: #FFF; font-weight:bold; padding: 5px; margin-bottom: 0;}
 
.menu_1 li { list-style:none; border-bottom:1px solid #999; margin: 0;}
.menu_1 li a, .menu_1 li strong { background: #E9E9E9; display: block; padding: 3px 0; line-height: 17px; padding-left: 5px; text-decoration: none;}
.menu_1 li strong { font-weight:bold;}
.menu_1 ul li a:visited { background: #F2F2F2;}
.menu_1 ul li a:hover { color: white; background: #36C;}
</style><br>