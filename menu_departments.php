<?php
require_once "common_data/config.php";
require_once _COMMON_DATA_PATH_."classes/ClassTableQuery.php";

$object_departments= new TableQuery;
$object_departments->order_by_field="id";
$array_departments=$object_departments-> query ("SELECT * FROM `"._TABLE_PREFIX_."departments` WHERE `status`='1' ORDER BY `order` ASC " );
////echo count($array_departments)." записей";
//echo "<pre>"; print_r($array_departments); echo "</pre>"; exit;

$submenu_array="";
//echo "<pre>"; print_r($submenu_array); echo "</pre>"; exit;
$submenu_array= $array_departments ;
if (isset($submenu_array) AND !empty($submenu_array))
{  ?>
   <DIV style="background-color:#17202B; margin:2px auto; width:98%; height:240; padding:10px 10px; text-align:center; float:center;"> 
        
   <?php 
   $i_submenu="0";
  foreach ($submenu_array as $key => $submenu_info) 
	  { $i_submenu++;
        if (1==2 //$i_submenu==5 OR $i_submenu==10 OR $i_submenu==15 OR $i_submenu==20
			)
		  { echo $i_submenu;
		    ?>
			</DIV>
            <DIV style="clear:both; width:200px; padding:5px 2px; float:left;"> 
		   <?php 
		  }
			else {
        ?> 
            <DIV style="height:60px; width:200px; margin:5px auto; padding:5px 10px; float:left; text-align:center;
			outline:0px solid aqua; <?php if ($show==9 AND $id==$submenu_info['id']) {echo "background-color:#960C1C; ";} ?>
			">
			<a style="color: #fff;   font-size: 15px; text-decoration: none;" href="index.php?show=9&id=<?php echo $submenu_info['id']; ?>">
                <?php echo $submenu_info['short_name_ru']; ?>
            </a></DIV>
       <?php
			  } 
	  } // end foreach
  ?>   
  </DIV>
  <?php
}
?>