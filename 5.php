<?php
include "common_data/functions/f_is_int.php";
if (isset($_GET['id']) AND !empty($_GET['id']) ) {is_int_obligatory ($_GET['id']);} else { exit("Недопустимый формат URL-запроса. Хакерство преследуется законом");}
$id=$_GET['id'];
/*
if (file_exists("news/".$id.".php"))
{
	echo "<br><a href=index.php?show=50>Назад в список новостей</a>";
include "news/".$id.".php";
echo "<br><a href=index.php?show=50>Назад в список новостей</a>";
}
*/
require_once "common_data/config.php";
include "common_data/classes/ClassTable.php";
include "common_data/classes/ClassTableQuery.php";

$object = new TableQuery;
$data_array=$object-> query("SELECT * FROM `keu_news` where `id`='$id' AND `status`='1'");
foreach ($data_array as  $array)
  { 
   ?>
   <hr>
   <DIV style="text-align:left; color:blue;"><a href="index.php"><?php echo $array_news['back'][$lang_current];?></a></DIV>
   <DIV class="news_block">
   <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $array_news['title'][$lang_current];?>:&nbsp;&nbsp;<?php echo $array[$lang_current.'_title']; ?></h4>
   <?php if (!empty($array['image'])) { ?><img src="img/news/<?php echo $array['image']; ?>" width="200" align="left"  style="padding-right:20;"> <?php }
   echo "<div style=\"padding-left:10\">".$array[$lang_current.'_text']."</div>"; 
   
	  ?>
   <!-- <div align="right">Дата:&nbsp;&nbsp;&nbsp; <?php echo $array['date']; ?></div> -->
   </DIV>
   <?php
    }  ?>
       
       <DIV style="text-align:left; color:blue; align:bottom;"><a href="index.php"><?php echo $array_news['back'][$lang_current];?></a></DIV>