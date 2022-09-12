<?php
function user_permissions($user, $table)
{ 
   $query = "SELECT * FROM `".$table."`
              WHERE `user` = $user  AND `status`='1' " ;
    $rez = mysql_query($query);
    if(!$rez) exit(mysql_error());
    if(mysql_num_rows($rez) > 0)
    {
      while($array = mysql_fetch_array($rez))
      {
        $array_permissions[$array['module']] [$array['permission']]=$array['permission'];
	  }
	  return $array_permissions;
	} else { return "0";}
}
?>