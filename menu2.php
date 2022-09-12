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
$padding_left="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
////echo "<pre>"; print_r($submenu_array_subotdels); echo "</pre>"; //exit;
?>
<!-- <DIV style="float:left; width:20px; height:40px;"></DIV> -->
<?php
	require_once "common_data/functions/f_xml2array.php";
	$settings_menu = file_get_contents("kel_data_admin/xml/menu.xml");
	$xml_array_menu = simplexml_load_string($settings_menu);
	$array_xml_menu= array();
	$array_xml_menu=xml2array($xml_array_menu);
    ///echo "<pre>"; print_r($xml_array_menu); echo "</pre>";
									
?>
<nav>
	<ul>
		<li><a href='index.php'><span><?php echo $array_xml_menu['menu_mainpage_'.$lang_current]; //echo $array_menu_name['mainpage'][$lang_current]; ?></span>&nbsp;&nbsp;<span class="caret"></span></a>
		 <?php 
	     if (isset($submenu_array_subotdels) AND !empty($submenu_array_subotdels))
         {
			 echo "<DIV><UL>";
			 foreach ($submenu_array_subotdels as $key_subotdels => $submenu_info_subotdels) 
	         { if ($submenu_info_subotdels['type']==3) { ?>
			    <li><a href='index.php?show=8&id=<?php echo $submenu_info_subotdels['id']; ?>'><span><?php echo $submenu_info_subotdels[$lang_current]; ?></span></a></li>
				 
				 <?php }
             }
             echo "</UL></DIV>";
         }
	     ?>
		</li>
		<li>
		    
			<a href='index.php?show=11&id=1'><span><?php echo $array_umo_menu[$lang_current]; //echo "УМО МОиН КР"; 
			 ?></span>&nbsp;&nbsp;<span class="caret"></span></a>
			<DIV><UL>
				<li><a href='index.php?show=11&id=1'><span><?php echo $array_umo_structure[$lang_current]; ?></span></a></li>
				<li><span><?php echo $array_umo_GosVpo[$lang_current]; // ГОС ВПО ?></span></li>
				<li><a href='index.php?show=11&id=3'><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $array_umo_magister[$lang_current]; ?></span></a></li>
				<li><a href='index.php?show=11&id=4'><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $array_umo_bachelor[$lang_current]; ?></span></a></li>
				<li><span><?php echo $array_umo_profiles[$lang_current]; ?></span>
				    <!-- <UL>
						<LI><a href='index.php'><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Бакалавр</span></a></LI>
                        <LI><a href='index.php'><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Бакалавр</span></a></LI>
                        
					</UL> -->
				</li>
				<li><a href='index.php?show=11&id=6'><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $array_umo_economics[$lang_current]; ?></span></a></li>
				<li><a href='index.php?show=11&id=7'><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $array_umo_management[$lang_current]; ?></span></a></li>
				<li><a href='index.php?show=11&id=8'><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $array_umo_commerce[$lang_current]; ?></span></a></li>
				<li><a href='index.php?show=11&id=9'><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $array_umo_bus_management[$lang_current]; ?></span></a></li>
				<li><a href='index.php?show=11&id=10'><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $array_umo_marketing[$lang_current]; ?></span></a></li>
				<li><a href='index.php?show=11&id=11'><span>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $array_umo_state_management[$lang_current]; ?></span></a></li>
				
	        </UL></DIV>
			
		</li>
		<li>
			<a href='index.php?show=9&id=1'><span><?php echo $array_xml_menu['menu_departments_'.$lang_current]; 
			//echo $array_menu_name['departments'][$lang_current]; ?></span>&nbsp;&nbsp;<span class="caret"></span></a>
			<?php 
			 if (isset($submenu_array) AND !empty($submenu_array))
			 {
				 echo "<DIV><UL>";
				 foreach ($submenu_array as $key => $submenu_info) 
				 { ?>
					<li><a href='index.php?show=9&id=<?php echo $submenu_info['id']; ?>'><span><?php echo $submenu_info['name_'.$lang_current]; ?></span></a></li>
					 
					 <?php
				 }
				 echo "</UL></DIV>";
			 }
			?>
		</li>
		<li><a href='index.php?show=8&id=1'><span><?php echo $array_xml_menu['menu_structure_'.$lang_current];
		//echo $array_menu_name['structure'][$lang_current]; ?></span>&nbsp;&nbsp;<span class="caret"></span></a>
      <?php 
	     if (isset($submenu_array_subotdels) AND !empty($submenu_array_subotdels))
         {
			 echo "<DIV><UL>";
			 foreach ($submenu_array_subotdels as $key_subotdels => $submenu_info_subotdels) 
	         { if ($submenu_info_subotdels['type']==2) { ?>
			    <li><a href='index.php?show=8&id=<?php echo $submenu_info_subotdels['id']; ?>'><span>
					<?php if (isset($submenu_info_subotdels['parent']) AND !empty($submenu_info_subotdels['parent'])) 
					{ echo $padding_left;}
					echo $submenu_info_subotdels[$lang_current]; ?></span></a></li>
				 
				 <?php }
             }
             echo "</UL></DIV>";
         }
		?>
		</li>
		<li><a href='index.php?show=89'><span><?php echo $array_xml_menu['menu_personal_'.$lang_current];
		//echo $array_menu_name['staff'][$lang_current]; ?></span>&nbsp;&nbsp;<span class="caret"></span></a>
		    <DIV><UL>
				<li><a href="<?php echo $array_xml_menu['menu_portal_link']; ?>"  target="_blank"><span><?php echo $array_xml_menu['menu_portal_'.$lang_current]; ?></span></a></li>
				<li><a href="<?php echo $array_xml_menu['menu_distant_link']; ?>"  target="_blank"><span><?php echo $array_xml_menu['menu_distant_'.$lang_current]; ?></span></a></li>
				<li><a href="<?php echo $array_xml_menu['menu_avn_link']; ?>"  target="_blank"><span><?php echo $array_xml_menu['menu_avn_'.$lang_current]; ?></span></a></li>
        <li><a href="<?php echo $array_xml_menu['menu_library_link']; ?>"  target="_blank"><span><?php echo $array_xml_menu['menu_library_'.$lang_current]; ?></span></a></li>
				<li><a href="<?php echo $array_xml_menu['menu_email_link']; ?>"  target="_blank"><span><?php echo $array_xml_menu['menu_email_'.$lang_current]; ?></span></a></li>
                <li><a href="<?php echo $array_xml_menu['menu_edoc_link']; ?>"  target="_blank"><span><?php
				echo $array_xml_menu['menu_edoc_'.$lang_current];
				?></span></a></li>
				<li><a href="http://178.217.173.102/bibl/"  target="_blank"><span><?php echo $array_pers_library_keu[$lang_current]; ?></span></a></li>
                <!-- <li><a href="http://178.217.173.109/test_center/"  target="_blank"><span>Тестирование</span></a></li>
                <li><a href="http://178.217.173.109/test_center/student/"  target="_blank"><span>Тестирование. Вход для студентов</span></a></li> -->
                <li><a href="http://online.keu.kg/"  target="_blank"><span>Online KEU</span></a></li>
                <li><a href="http://178.217.173.107/anketa/"  target="_blank"><span><?php echo $array_pers_anketa[$lang_current]; ?></span></a></li>
                <li><a href="http://178.217.173.109/library/"  target="_blank"><span><?php echo $array_pers_library[$lang_current]; ?></span></a></li>
                <li><a href="http://178.217.173.103/"  target="_blank"><span><?php echo $array_pers_file_server[$lang_current]; ?></span></a></li>
                <li><a href="http://178.217.173.109/shedule/"  target="_blank"><span><?php echo $array_pers_shedule[$lang_current]; ?></span></a></li>
                <li><a href="http://178.217.173.109/course_choice/"  target="_blank"><span><?php echo $array_pers_course_choice[$lang_current]; ?></span></a></li>
				<li><a href="http://178.217.173.109/vestnik/"  target="_blank"><span><?php echo $array_pers_vestnik_keu[$lang_current]; ?></span></a></li>
                <li><a href="http://178.217.173.109/video_lessons/"  target="_blank"><span><?php echo $array_pers_english_umk[$lang_current]; ?></span></a></li>
                
	        </UL></DIV>
		</li>
		<li><a href='index.php?show=90'><span><?php echo $array_vacancies[$lang_current]; ?></span></a></li>
		<li><a href='index.php?show=88'><span><?php echo $array_xml_menu['menu_contacts_'.$lang_current];
		//echo $array_menu_name['contacts'][$lang_current]; ?></span></a></li>
	</ul>
</nav>


<?php 
   $nav_background_color="#002f4b;"; // #003399 #EBE8E4;
   $nav_font_size="15px;"; // 15px;
   $menu_link_hover_color="aqua;"; // rgb( 255, 255, 255 ); rgb( 40, 44, 47 )
   $sub_menu_background_color="#F0F0F0;"; // rgb( 40, 44, 47 );
   $menu_background_color="#F0F0F0;"; // rgb( 40, 44, 47 );
   $menu_text_color_hover="#003399"; // rgb( 255, 255, 255 );
   $sub_menu_text_color="#003399;"; // #fff;
   $sub_menu_padding="8px 12px;";
   $sub_menu_background_color_hover="rgba( 206, 206, 206, 0.5);"; //rgba( 255, 255, 255, 0.1);
   $sub_menu_text_color_hover="#003399;";
   $sub_menu_font_size="12px;";
   $submenu_width="250px;"; // 165px
   $menu_height="35px;"; // 56px;
echo '
<STYLE>
nav {
  outline:0px solid red;
  background-color: '.$nav_background_color.'
  border: 1px solid #003399;
  border-radius: 4px;
  box-shadow: 0 2px 2px -1px rgba(0, 0, 0, 0.055);
  color: #888;
  display: block;
  margin: 0px 0px 0px 0px;
  overflow: hidden;
  width: 99%;
  font-size: '.$nav_font_size.'
  font-weight: 300;
  font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
}

  nav ul {
    margin: 0;
    padding: 0;
  }

    nav ul li {
      display: inline-block;
      list-style-type: none;
      
      -webkit-transition: all 0.2s;
        -moz-transition: all 0.2s;
        -ms-transition: all 0.2s;
        -o-transition: all 0.2s;
        transition: all 0.2s; 
    }
      
      nav > ul > li > a > .caret {
        border-top: 4px solid #aaa;
        border-right: 4px solid transparent;
        border-left: 4px solid transparent;
        content: "";
        display: inline-block;
        height: 0;
        width: 0;
        vertical-align: middle;
  
        -webkit-transition: color 0.1s linear;
     	  -moz-transition: color 0.1s linear;
       	-o-transition: color 0.1s linear;
          transition: color 0.1s linear; 
      }

      nav > ul > li > a {
        color: #aaa;
        display: block;
        line-height: '.$menu_height.'
        padding: 0 24px;
        text-decoration: none;
      }

        nav > ul > li:hover {
          background-color: '.$menu_background_color.'
        }

        nav > ul > li:hover > a {
          color: '.$menu_text_color_hover.'
        }

        nav > ul > li:hover > a > .caret {
          border-top-color: rgb( 0, 51, 153 );
        }
      
      nav > ul > li > div {
        background-color: '.$sub_menu_background_color.'
        border-top: 0;
		border:1px solid #C1C1C1;
		font-size: '.$sub_menu_font_size.';
		font-family:arial; font-weight:bold;
        border-radius: 0 0 4px 4px;
        box-shadow: 0 2px 2px -1px rgba(0, 0, 0, 0.055);
        display: none;
        margin: 0;
        opacity: 0;
        position: absolute;
        width: '.$submenu_width.'
	visibility: hidden;
	z-index: 100;
  
        -webkit-transiton: opacity 0.2s;
        -moz-transition: opacity 0.2s;
        -ms-transition: opacity 0.2s;
        -o-transition: opacity 0.2s;
        -transition: opacity 0.2s;
      }

        nav > ul > li:hover > div {
          display: block;
          opacity: 1;
          visibility: visible;
        }

          nav > ul > li > div ul > li {
            display: block;
          }

            nav > ul > li > div ul > li > a {
              color: '.$sub_menu_text_color.'
              display: block;
              padding: '.$sub_menu_padding.'
              text-decoration: none;
            }

              nav > ul > li > div ul > li:hover > a {
                background-color: '.$sub_menu_background_color_hover.'
				color: '.$sub_menu_text_color_hover.'
				border:1px dotted green;
              }
  
</STYLE>
';
?>