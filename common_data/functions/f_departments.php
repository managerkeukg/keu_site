<?php
function departments($tablename, $order)
{
$query = "SELECT * FROM `$tablename`
              WHERE `status` = '1' ORDER BY `".$order."` ASC LIMIT 0, 100";
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