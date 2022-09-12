<STYLE>
a.colored { 
    color:white; /* Цвет ссылок */ 
}

.front_menu a {
	color:#54504E;
	text-decoration:none;
	font-weight:bold;
}
.menus {
   width:120px;
   text-align:left;
  
   /* border-right:2px solid #F27E0F; */
}
.menus a {
	 color:#002f4b;    /* #003399; */
}
.menus_icons {
   width:40px;
   text-align:right;
}

.btn-next {
    display: block;
    color: #FFFFFF;
    background: #3C80F2;
    margin: 16px 0;
    padding: 10px;
    border-radius: 20px;
    text-align: center;
    text-transform: uppercase;
    text-decoration: none;
    font-size: 11px;
    font-weight: bold;
    cursor: pointer;
    box-shadow: 0px 2px 5px #b2b2b2;
}

.menu_gray img
{
  width:35px;  
}
</STYLE>
<DIV style="clear:both; float:left; width:300px; height:2000px; padding:0px 0px 0px 0px; ">
	<?php include "banners.php"; ?>
	<?php ///include "calendar_table.php"; ?>
	<DIV style="width:300px;  margin:auto auto; padding:0px 0px 0px 0px; text-align:center;  "> 
	   <?php include "youtube.php"; ?>
	</DIV>	
</DIV>
<DIV style="float:left; width:900px; height:1800px; margin:0px auto; padding:0px 0px; text-align:left;">
	   <?php 
	       ///include_once "simple_slider.php";
	       //include_once "slider_news.php";
	       include_once "slider_jssor.php";
		require_once "common_data/functions/f_xml2array.php";
		$frontpage_settings = file_get_contents("kel_data_admin/xml/frontpage.xml");
		$xml_array_frontpage = simplexml_load_string($frontpage_settings);
		$array_frontpage_xml= array();
		$array_frontpage_xml= xml2array($xml_array_frontpage);
	   ?>
	   <DIV style="float:left; width:900px; margin:10px auto; height:55px; background-color:#DBDCDE;   padding:0px 0px 0px 0px; text-align:center;">
	   <?php //include_once "simple_slider.php"; ?>
	   <TABLE style="text-align:center; font:20px bold; font-family: Verdana, Geneva, sans-serif; " class="front_menu">
	   <TR>
		<TD class="menus_icons">
			<!--
			<a href="index.php?show=101"><IMG src="img/icons/abit.png" width="30px"></IMG></a>
			-->
		</TD>
		<TD class="menus">
			<a href="index.php?show=101"><?php //echo $array_frontpage['ToAbiturients'][$lang_current]['name'];
		    echo $array_frontpage_xml['frontpage_abiturients_name_'.$lang_current]; ?></a>
		</TD>
		<TD class="menus_icons">
			<!--
			<a href="index.php?show=102"><IMG src="img/icons/students.png" width="30px"></IMG></a>
			-->
		</TD>
		<TD class="menus">
			<a href="index.php?show=102">
			<?php //echo $array_frontpage['ToStudents'][$lang_current]['name'];
		    echo $array_frontpage_xml['frontpage_students_name_'.$lang_current];
			?></a>
		</TD>
		<TD class="menus_icons">
			<!--
			<a href="index.php?show=104"><IMG src="img/icons/international.png" width="30px"></IMG></a>
			-->
		</TD>
		<TD class="menus"><a href="index.php?show=104">
			<?php //echo $array_frontpage['International'][$lang_current]['name']; 
		    echo $array_frontpage_xml['frontpage_international_name_'.$lang_current];
			?></a>
		</TD>
		<TD class="menus_icons">
			<!--
			<a href="index.php?show=105">
			<IMG src="img/icons/career.png" width="30px"></IMG></a>
			-->
		</TD>
		<TD class="menus">
			<a href="index.php?show=105"><?php //echo $array_frontpage['Career'][$lang_current]['name']; 
		    echo $array_frontpage_xml['frontpage_career_name_'.$lang_current];
			?></a>
		</TD>
		
		<TD class="menus_icons">
			<!--
			<a href="index.php?show=103"><IMG src="img/icons/science.png" width="30px"></IMG></a>
			-->
		</TD>
		<TD class="menus"><a href="index.php?show=103"> 
			<?php //echo $array_frontpage['Science'][$lang_current]['name']; 
		    echo $array_frontpage_xml['frontpage_science_name_'.$lang_current];
			?></a> 
		</TD>
		
		<TD class="menus_icons">
			<!--
			<a href="index.php?show=106"><IMG src="img/icons/corruption.png" width="30px"></IMG></a>
			-->
		</TD>
		<TD class="menus">
			<a href="index.php?show=106"> <?php //echo $array_frontpage['Science'][$lang_current]['name']; 
		    echo $array_frontpage_xml['frontpage_corruption_name_'.$lang_current];
			?></a> 
		</TD>
				
	   </TR>
	   </TABLE>
	  </DIV>
	  <!--  -->
	  <?php
			require_once "common_data/functions/f_xml2array.php";
			$head_settings = file_get_contents("kel_data_admin/xml/other.xml");
			$xml_array_other = simplexml_load_string($head_settings);
			$array_xml_other= array();
			$array_xml_other=xml2array($xml_array_other);
			///echo "<pre>"; print_r($xml_array_other); echo "</pre>";
			
			$news_settings = file_get_contents("kel_data_admin/xml/plugins/news/index.xml");
			$xml_array_news = simplexml_load_string($news_settings);
			$array_xml_news= array();
			$array_xml_news=xml2array($xml_array_news);
			///echo "<pre>"; print_r($xml_array_news); echo "</pre>";

	  ?>
	  <DIV style="margin:20px auto; height:<?php echo $array_xml_news['block_height']; ?>px;">
		<DIV style="float:left; height:<?php echo $array_xml_news['block_height']; ?>px; width:<?php echo $array_xml_news['block_width']; ?>px; padding:0px 10px 0px 10px;  background-color:white; ">
			 <!-- <DIV  style="margin-top:-2px;" ><IMG src="img/icons/news.png" width="100%" ></IMG></DIV> -->
			 <DIV  style="
			        background-image: url(img/icons/news_bg.jpg);
					background-position: center center;
					background-repeat: no-repeat;
					text-align:right; padding-right:5px; color:white;
					font-size: 14px;
					font-family:verdana; font-weight:bold;" ><?php echo $array_xml_other['footer_news_'.$lang_current]; ?></DIV>
						 <?php include "news.php"; ?>
		</DIV>
		<DIV style="float:left; height:<?php echo $array_xml_news['block_height']; ?>px; width:<?php echo $array_xml_news['block_width']; ?>px; margin-left:60px; padding:0px 10px 0px 10px;  background-color:white;">
			 <!-- <DIV  style="margin-top:-2px;" ><IMG src="img/icons/attention.png" width="400px" ></IMG></DIV> -->
			 <DIV  style=" background-image: url(img/icons/news_bg.jpg);
		background-position: center center;
		background-repeat: no-repeat;
		text-align:right; padding-right:5px; color:white;
		font-size: 14px;
		font-family:verdana; font-weight:bold;" ><?php echo $array_xml_other['footer_announcements_'.$lang_current]; ?></DIV>
			 <?php include "calendar.php"; 
			 ?>
		</DIV>
	  </DIV>
</DIV>