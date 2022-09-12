<?php 
require_once "../settings.php";
require_once _DATA_PATH_."top.php";
require_once _COMMON_DATA_PATH_."classes/ClassDataTable.php"; 
require_once _DATA_PATH_."functions/f_is_int.php";

check_module_user_permission(array ("modules" =>$MODULES_ARRAY, "user_permissions" => $USER_PERMISSIONS_ARRAY), "access");

$id=$_GET['id'];

$query = "SELECT * FROM `"._TABLE_PREFIX_._USER_PREFIX_."_access_user_permissions`
              WHERE `user` = '$id' AND `status`='1' ";
      $rez= mysql_query($query);
      if(!$rez) exit(mysql_error());
      if(mysql_num_rows($rez) > 0)
      {
         while($array= mysql_fetch_array($rez))
        {
          $user_permissions[$array['module']] [$array['permission']]=$array['permission']; // ['permission']
	    }
      } else { }
	///echo "<pre>user permissions  "; print_r($user_permissions) ; echo "</pre>";

$query="SELECT * from `"._TABLE_PREFIX_._USER_PREFIX_."_access_modules` WHERE status='1' ";
	$cat = mysql_query($query);
    if($cat) 
         { if (mysql_num_rows($cat)> 0)
		    {  ?>
			<FORM action="save.php" method="POST">
			<TABLE border="0" cellPadding="3" cellSpacing="0"  align="center" >
            <TR bgcolor="#023183" align="center" style="color:white" height="35">
			<TD>Номер</TD>
			<TD>Название модуля</TD>
			<TD>Путь</TD>
			<TD>ВСЕ</TD>
			<TD>Просмотр</TD>
			<TD>Скрытие/Открытие</TD>
			<TD>Добавление</TD>
			<TD>Редактирование</TD>
			<TD>Удаление</TD>
			</TR>
			<?php
			while( $array = mysql_fetch_assoc($cat)) { ?>
			<TR >
			<TD><?php echo $array['id']; ?></TD>
			<TD><?php echo $array['name']; ?></TD>
			<TD><?php echo $array['path']; ?></TD>
			<TD><INPUT type="checkbox"  name="<?php echo $array['id']; ?>_1"  <?php if ($user_permissions[$array['id']] [1]==1) { echo "checked";} ?> ></INPUT></TD>
			<TD><INPUT type="checkbox"  name="<?php echo $array['id']; ?>_2"  <?php if ($user_permissions[$array['id']] [2]==2) { echo "checked";} ?> ></INPUT></TD>
			<TD><INPUT type="checkbox"  name="<?php echo $array['id']; ?>_3"   <?php if ($user_permissions[$array['id']] [3]==3) { echo "checked";} ?> ></INPUT></TD>
			<TD><INPUT type="checkbox"  name="<?php echo $array['id']; ?>_4"   <?php if ($user_permissions[$array['id']] [4]==4) { echo "checked";} ?>></INPUT></TD>
			<TD><INPUT type="checkbox"  name="<?php echo $array['id']; ?>_5"   <?php if ($user_permissions[$array['id']] [5]==5) { echo "checked";} ?>></INPUT></TD>
			<TD><INPUT type="checkbox"  name="<?php echo $array['id']; ?>_6"   <?php if ($user_permissions[$array['id']] [6]==6) { echo "checked";} ?>></INPUT></TD></TR>
			<?php
			}  
 			?>
			<TR >
			<TD></TD>
			<TD><INPUT type="submit" value="Сохранить"></INPUT></TD>
			<TD></TD>
			<TD></TD>
			<TD></TD>
			<TD></TD>
			<TD></TD>
			<TD></TD>
			</TR>
			</TABLE>
			<INPUT type="hidden" name="user" value="<?php echo $id; ?>"></INPUT>
			</FORM>
            <?php			
			} else {}
  		 }
      else {exit(mysql_error());}

require_once _DATA_PATH_."bottom.php";
?>