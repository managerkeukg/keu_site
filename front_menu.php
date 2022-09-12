<?php 
require_once "common_data/config.php";
require_once "common_data/classes/ClassTable.php";
require_once "common_data/classes/ClassTableQuery.php";

$object = new TableQuery;
$data_array=$object-> query("SELECT * FROM `keu_menu_front` where `status`='1'  ORDER BY `order`"); //DESC LIMIT 0, 5
//echo "<pre>"; print_r($data_array); echo "</pre>";
if (isset($data_array) AND !empty($data_array))
  {   ?>
      <DIV style="outline:0px solid green; width:1040px; margin:0px auto;">
      <?php
	  foreach ($data_array as  $key=>$value)
	  {  ?>
			<DIV class="cols">
				<DIV class="cols_image">
					 <a href="<?php echo $value['link'];?>" ><img src="img/front_menu/<?php echo $value['image'];?>"  width="200" height="248" alt="" ></a>
				</DIV>
				<DIV class="cols_text">
					 <a href="<?php echo $value['link'];?>" class="colored" >
					 <h3><?php echo $value['title_'.$lang_current];?></h3>
					 <?php echo $value['short_title_'.$lang_current];?>
					 </a>
				</DIV>
			</DIV>
         <?php
	  }
      ?>
	  </DIV>
	  <?php
  }
?>
<STYLE>
.cols {
   float:left;
   height:350px;
   width:204px;
   background-color:#2B8ADC; /*#1D459C #FF182B*/
   text-align:center;
   margin: 0px 2px;
}

.cols_image {
   padding:0px 0px;
   width:200px;
}
.cols_text {
   text-align:left;
   padding-left:10px;
   color:white;
}
</STYLE>