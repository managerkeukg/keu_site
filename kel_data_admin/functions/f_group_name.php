<?php
function group_name($id_group, $table)
{
$query_group = "SELECT * FROM `$table`
              WHERE `id` = $id_group";
    $rez_rez_group = mysql_query($query_group);
    if(!$rez_rez_group) exit(mysql_error());
    // Если для текущего элемента каталога имеется хотя бы
    // одна  позиция, формируем выпадающий список
    if(mysql_num_rows($rez_rez_group) > 0)
    {
      while($rez_group = mysql_fetch_array($rez_rez_group))
      {
        $group_name=trim($rez_group['name']);
	  }
      
	  return $group_name;
	} else {}
}


?>