<?php 
require_once "common_data/config.php";
require_once "common_data/classes/ClassTable.php";
require_once "common_data/classes/ClassTableQuery.php";

$object = new TableQuery;
$data_array=$object-> query("SELECT * FROM `keu_front_submenu` where `status`='1'  ORDER BY `order`"); //DESC LIMIT 0, 5
//echo "<pre>"; print_r($data_array); echo "</pre>";
if (isset($data_array) AND !empty($data_array))
  {   ?>
      <DIV style="clear:both; outline:0px solid red; width:1045px; padding-top:20px; margin:0px auto;">
      <?php
	  foreach ($data_array as  $key=>$value)
	  {  ?>
			 <DIV class="menu_blocks">
				<a href='<?php echo $value['link'];?>' target="_blank">
				   <DIV style="padding-top:20px;"><span><?php echo $value['text_'.$lang_current];?></span></DIV>
				</a>
			 </DIV>
         <?php
	  }
      ?>
	  </DIV>
	  <?php
  }
?>
<STYLE>
.menu_blocks {
   float:left;
   height:70px;
   width:204px;
   background-color:#2B8ADC; /*#1d459c*/
   background: url(img/icons/bg_small.png) no-repeat center;
   padding:5px 0px;
   text-align:center;
   margin:0px 2px;
   
}
.menu_blocks a {
   color: #ffffff;
}
.menu_blocks:hover {
   color: black;
   background-color: rgba(29,69,156, 0.8)  ;
   background-image: url("img/icons/bg.png"); background-repeat: none;
   border:2px solid #1d459c;
}
</STYLE>