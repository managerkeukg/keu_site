<?php
function department_staff($department, $tablename)
{
$query = "SELECT * FROM `$tablename`
              WHERE `department` = '$department' AND `status`='1'";
    $rez = mysql_query($query);
    if(!$rez) exit(mysql_error());
    if(mysql_num_rows($rez) > 0)
    { $array="";
      while($array_1 = mysql_fetch_array($rez))
      {  
         $array[]=$array_1;
	  }
	  return $array;
	} else {}
}
?>