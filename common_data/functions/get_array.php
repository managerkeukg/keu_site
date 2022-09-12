<?php
function get_array ($tablename, $where )
{
$query = "SELECT * FROM `$tablename` $where";
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