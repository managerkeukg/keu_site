<?php
require_once "common_data/config.php";
require_once _COMMON_DATA_PATH_."classes/ClassTableQuery.php";

$object_subotdels= new TableQuery;
$object_subotdels->order_by_field="id";
$array_subotdels=$object_subotdels-> query ("SELECT * FROM `"._TABLE_PREFIX_."subotdels` WHERE `status`='1' ORDER BY `order` ASC " );
////echo count($array_subotdels)." записей";
////echo "<pre>"; print_r($array_subotdels); echo "</pre>";

$object_departments= new TableQuery;
$object_departments->order_by_field="id";
$array_departments=$object_departments-> query ("SELECT * FROM `"._TABLE_PREFIX_."departments` WHERE `status`='1' ORDER BY `order` ASC " );
////echo count($array_departments)." записей";
////echo "<pre>"; print_r($array_departments); echo "</pre>"; 

$submenu_array= $array_departments ;

$submenu_array_subotdels= $array_subotdels ;
//echo "<pre>"; print_r($submenu_array_subotdels); echo "</pre>"; exit;
?>
<!-- <DIV style="float:left; width:20px; height:40px;"></DIV> -->

<?php $array_menu_name= array ( 
     "mainpage" => array ("eng"=> "Mainpage", "ru"=> "Главная", "kg"=> "Негизги бет"),
     "departments" => array ("eng"=> "Departments", "ru"=> "Кафедры", "kg"=> "Кафедралар"),
     "university" => array ("eng"=> "University", "ru"=> "Университет", "kg"=> "Университет"),
     "structure" => array ("eng"=> "Structure", "ru"=> "Структура", "kg"=> "Структура"),
     "staff" => array ("eng"=> "Personal", "ru"=> "Сотрудникам", "kg"=> "Сотрудниктерге"),
     "contacts" => array ("eng"=> "Contacts", "ru"=> "Контакты", "kg"=> "Контакттар")    
                               ); 
	$array_menu_name['staff']['portal']	= array ("eng" => "Education portal",
					                 "kg" =>  "Билим алуу порталы",
					                 "ru" =>  "Образовательный <BR> портал",
									 "link" =>  "http://www.portal.keu.kg/"
					                );			
	$array_menu_name['staff']['distant']	= array ("eng" => "Distant Education",
					                 "kg" =>  "Узактан билим алуу",
					                 "ru" =>  "Дистанционное обучение",
									 "link" =>  "http://inoo.keu.kg/"
					                );			
	$array_menu_name['staff']['avn']	= array ("eng" => "Information system AVN ",
					                 "kg" =>  "AVN маалымат системасы",
					                 "ru" =>  "Информационная система AVN",
									 "link" =>  "http://avn.keu.kg/"
					                );			
	$array_menu_name['staff']['library']	= array ("eng" => "E-library",
					                 "kg" =>  "Электрондук китепкана",
					                 "ru" =>  "Электронная библиотека",
									 "link" =>  "http://lib.kg/lib/"
					                );			
	$array_menu_name['staff']['library_keu']	= array ("eng" => "E-library KEU",
					                 "kg" =>  "Электрондук китепкана КЭУ",
					                 "ru" =>  "Электронная библиотека КЭУ",
									 "link" =>  "http://lib.kg/lib/"
					                );			
	$array_menu_name['staff']['email']	= array ("eng" => "E-mail keu.kg",
					                 "kg" =>  "keu.kg почтасы",
					                 "ru" =>  "ПОЧТА keu.kg",
									 "link" =>  "http://mx.hoster.kg/"
					                );	
	$array_menu_name['staff']['vestnik']	= array ("eng" => "Journal",
					                 "kg" =>  "Журнал",
					                 "ru" =>  "Вестние КЭУ",
									 "link" =>  "http://178.217.173.109/vestnik/"
					                );								
									
							   ?>
<div id='cssmenu'>
<ul>
   <li class='active has-sub'><a href='index.php'><span><?php echo $array_menu_name['mainpage'][$lang_current]; ?></span></a>
       <?php 
	     if (isset($submenu_array_subotdels) AND !empty($submenu_array_subotdels))
         {
			 echo "<UL>";
			 foreach ($submenu_array_subotdels as $key_subotdels => $submenu_info_subotdels) 
	         { if ($submenu_info_subotdels['type']==3) { ?>
			    <li><a href='index.php?show=8&id=<?php echo $submenu_info_subotdels['id']; ?>'><span><?php echo $submenu_info_subotdels[$lang_current]; ?></span></a></li>
				 
				 <?php }
             }
             echo "</UL>";
         }
	     ?>
   </li>
   <li class='active has-sub'><a href='index.php?show=9&id=1'><span><?php echo $array_menu_name['departments'][$lang_current]; ?></span></a>
      <?php 
	     if (isset($submenu_array) AND !empty($submenu_array))
         {
			 echo "<UL>";
			 foreach ($submenu_array as $key => $submenu_info) 
	         { ?>
			    <li><a href='index.php?show=9&id=<?php echo $submenu_info['id']; ?>'><span><?php echo $submenu_info['name_'.$lang_current]; ?></span></a></li>
				 
				 <?php
             }
             echo "</UL>";
         }
	  ?>
      
   </li>
   <!-- <li class='has-sub'><a href='index.php?show=14'><span><?php echo $array_menu_name['university'][$lang_current]; ?></span></a>
        
   </li> -->
   <li class='has-sub'><a href='index.php?show=8&id=1'><span><?php echo $array_menu_name['structure'][$lang_current]; ?></span></a>
      <?php 
	     if (isset($submenu_array_subotdels) AND !empty($submenu_array_subotdels))
         {
			 echo "<UL>";
			 foreach ($submenu_array_subotdels as $key_subotdels => $submenu_info_subotdels) 
	         { if ($submenu_info_subotdels['type']==2) { ?>
			    <li><a href='index.php?show=8&id=<?php echo $submenu_info_subotdels['id']; ?>'><span><?php echo $submenu_info_subotdels[$lang_current]; ?></span></a></li>
				 
				 <?php }
             }
             echo "</UL>";
         }
	  ?>
   </li>   
   <li class='last has-sub'><a href='index.php?show=89'><span><?php echo $array_menu_name['staff'][$lang_current]; ?></span></a>
      <UL>
	    <li><a href='<?php echo $array_menu_name['staff']['portal']['link']; ?>'  target="_blank"><span><?php echo $array_menu_name['staff']['portal'][$lang_current]; ?></span></a></li>
		<li><a href='<?php echo $array_menu_name['staff']['distant']['link']; ?>'  target="_blank"><span><?php echo $array_menu_name['staff']['distant'][$lang_current]; ?></span></a></li><!-- 178.217.173.38 -->
		<li><a href='<?php echo $array_menu_name['staff']['avn']['link']; ?>'  target="_blank"><span><?php echo $array_menu_name['staff']['avn'][$lang_current]; ?></span></a></li><!-- 178.217.173.38 -->
		<li><a href='<?php echo $array_menu_name['staff']['avn']['link']; ?>'  target="_blank"><span><?php echo $array_menu_name['staff']['avn'][$lang_current]; ?></span></a></li><!-- 178.217.173.38 -->
		<li><a href='<?php echo $array_menu_name['staff']['library']['link']; ?>'  target="_blank"><span><?php echo $array_menu_name['staff']['library'][$lang_current]; ?></span></a></li><!-- 178.217.173.38 -->
		<li><a href='<?php echo $array_menu_name['staff']['library_keu']['link']; ?>'  target="_blank"><span><?php echo $array_menu_name['staff']['library_keu'][$lang_current]; ?></span></a></li><!-- 178.217.173.38 -->
		<li><a href='<?php echo $array_menu_name['staff']['email']['link']; ?>'  target="_blank"><span><?php echo $array_menu_name['staff']['email'][$lang_current]; ?></span></a></li>
		<li><a href='<?php echo $array_menu_name['staff']['vestnik']['link']; ?>'  target="_blank"><span><?php echo $array_menu_name['staff']['vestnik'][$lang_current]; ?></span></a></li>
		
	  </UL>
   </li>
   <li><a href='index.php?show=88'><span><?php echo $array_menu_name['contacts'][$lang_current]; ?></span></a></li>
</ul>
</div>
<?php //include "lang_menu.php"; 
   include "menu_css.php";
?>
<link rel="stylesheet" type="text/css" href="slider/engine1/style.css" />
<script type="text/javascript" src="slider/engine1/jquery.js"></script>