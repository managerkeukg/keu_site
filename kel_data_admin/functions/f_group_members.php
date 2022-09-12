<?php
function group_members($group, $tablename)
{
$query = "SELECT * FROM `$tablename`
              WHERE `group` = '$group'";
    $rez = mysql_query($query);
    if(!$rez) exit(mysql_error());
    // Если для текущего элемента каталога имеется хотя бы
    // одна  позиция, формируем выпадающий список
    if(mysql_num_rows($rez) > 0)
    { $member_array="";
      while($array = mysql_fetch_array($rez))
      {
        $member_array[trim($array['user'])]=trim($array['user']);
	  }
	  return $member_array;
	} else {}
}
?>