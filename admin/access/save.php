<?php 
require_once "../settings.php";
require_once _DATA_PATH_."top.php";
require_once _COMMON_DATA_PATH_."classes/ClassDataTable.php"; 

check_module_user_permission(array ("modules" =>$MODULES_ARRAY, "user_permissions" => $USER_PERMISSIONS_ARRAY), "access");

$id_user=$_POST['user'];
// get modules array
$query="SELECT * from `"._TABLE_PREFIX_._USER_PREFIX_."_access_modules` WHERE status='1'";
	$cat = mysql_query($query);
    if($cat) 
         { if (mysql_num_rows($cat)> 0)
		    { 
			   while( $array = mysql_fetch_assoc($cat)) 
			  { $modules_array[]=$array;	}  
 			} else { 	}
  		 }
      else {exit(mysql_error());}
///echo "<pre>List of all Modules  "; print_r($modules_array) ; echo "</pre>";
$count_modules=count($modules_array);
///echo $count_modules." count modules";
//get user's permissions
$query = "SELECT * FROM `"._TABLE_PREFIX_._USER_PREFIX_."_access_user_permissions`
              WHERE `user` = '$id_user' AND `status`='1' ";
      $rez= mysql_query($query);
      if(!$rez) exit(mysql_error());
      if(mysql_num_rows($rez) > 0)
      {
         while($array= mysql_fetch_array($rez))
        {
          $ex_array[$array['module']] [$array['permission']]=$array['permission']; // ['permission']
	    }
      } else { }
///  	echo "<pre>Ex permissions  "; print_r($ex_array) ; echo "</pre>";
foreach ($_POST as $key=>$value)
{
$arr=explode("_", $key);
///echo "<pre>"; print_r($arr); echo "</pre>";
if (!empty($arr['1']))
{
    ///echo "<br>module ".$arr['0']." permission".$arr['1'];
    $new_array[$arr['0']] [$arr['1']]=$arr['1'];
}
} // end foreach
///echo "<pre>New permissions  "; print_r($new_array) ; echo "</pre>";

/// i = count modules; j = count permissions 
for ($i=1; $i<=$count_modules; $i++)
{
  for($j=1; $j<=6; $j++)
  {
    if ($new_array[$i][$j]==$ex_array[$i][$j])
    {  //echo "<br>not changed"; 
	} else { ///echo "<br>must be updated";  
	      $change_array[$i][$j]=$j;
		}
   }
}
///echo "<pre>Change permissions  "; print_r($change_array) ; echo "</pre>";

foreach ($change_array as $module => $data)
{
   foreach ($data as $permission)
   {
     $query = "SELECT * FROM `"._TABLE_PREFIX_._USER_PREFIX_."_access_user_permissions`
              WHERE `user` = '$id_user' AND `module`='".$module."' AND `permission`=$permission ";
      $rez= mysql_query($query);
      if(!$rez) exit(mysql_error());
      if(mysql_num_rows($rez) > 0)
      {
         ///echo "<br>must be updated"; 
		 $status="";
		 while($array_rez= mysql_fetch_array($rez))
		 { if ($array_rez['status']=='1') {$status="0";} else {$status="1";}
		 }
		 
		 // update script
		 ///*
		 $query="update `"._TABLE_PREFIX_._USER_PREFIX_."_access_user_permissions` SET 
				   status='$status'
				   WHERE `module`='$module' AND `user`='$id_user' AND `permission`='$permission' ";
         $cat = mysql_query($query);
        if($cat) 
         {
  		 }
      else {$error_update[]="0";}
		// */
	  } else { 
	  ///echo "<br> must be inserted";
	  // insert script
	  ///*
	  $query = "INSERT INTO `"._TABLE_PREFIX_._USER_PREFIX_."_access_user_permissions`
            VALUES(NULL,
			       '$module',
                   '$id_user',
                   '$permission',
				   '1',
				   '1'
				   )";
       if(mysql_query($query))
      {   } else {$error_insert[]="0";}
	  //*/
	  
	  
	  }
	}
}
if (isset($error_update) AND !empty($error_update)) {echo "<pre>Update error  "; print_r($error_update) ; echo "</pre>"; }
if (isset($error_insert) AND !empty($error_insert))  {echo "<pre>Insert error "; print_r($error_insert) ; echo "</pre>"; }
if (empty($error_update) AND empty($error_update)) {
 echo "<HTML><HEAD>
          <META HTTP-EQUIV='Refresh' CONTENT='0; URL=index.php'>
          </HEAD></HTML>";
}
require_once _DATA_PATH_."bottom.php";
?>