<?php 
require_once "common_data/config.php";
require_once "common_data/classes/ClassTable.php";
require_once "common_data/classes/ClassTableQuery.php";

$object = new TableQuery;
$data_array_cal=$object-> query("SELECT * FROM `keu_calendar` where `status`='1'  ORDER BY `id` DESC "); //LIMIT 0, 5

//echo "<pre>"; print_r($data_array_cal); echo "</pre>";
if (isset($data_array_cal) AND !empty($data_array_cal))
  {    $show_by_cal=$array_xml_news['records_viewed'];
       $tot_records_cal=count($data_array_cal); //echo $tot_records_cal; 
	  $tot_pages_cal=(int)($tot_records_cal/$show_by_cal); 
	  if((float)($tot_records_cal/$show_by_cal) - $tot_pages_cal != 0) {$tot_pages_cal++;}
	  //echo "pages ".$tot_pages_cal;
	  $current_page_cal=1; //echo (float)(1/4);
	  ?>
<script>
	var tot_records_cal = <?php echo count($data_array_cal);?>;
	var show_by_cal=<?php echo $show_by_cal; ?>;
	var current_news_cal =1;
	var tot_pages_cal = <?php echo $tot_pages_cal;?>;
</script>
  <DIV id="page_cal_1"  class="pages_div display">
	  <?php
	  
  $i=0;
  foreach ($data_array_cal as  $array)
  {  
	  $i++;  if($i % 2 == 0) {  $bgcolor="silver"; } else {  $bgcolor="white"; }
	  if((float)($i/$show_by_cal) - $current_page_cal != 0) {$row_end_cal="";} 
	  else {$current_page_cal++; 
	    if($i==$tot_records_cal) {$row_end_cal="";} else 
			{$row_end_cal="</DIV><DIV id=\"page_cal_".$current_page_cal."\"  class=\"pages_div display_none\" >"; }
	  }
		?>	
    <DIV id="cal_<?php echo $i; ?>" class="news_block" style="clear:both; padding-bottom:5px; font-size:12px; text-decoration: none; text-align:left;">
		<!-- <DIV><IMG src="news_line.jpg" style="width:100%; margin:0px auto; "></IMG></DIV> -->
		<HR>
		<a href="index.php?show=110&id=<?php echo $array['id'];?>" style="color: #2562ad;">
		<!-- <p><?php echo  "&nbsp;".$array['date']; ?></p> -->
		<?php if (!empty($array['photo'])) { ?>
		
		  <DIV style="padding-right:5px; float:left;"><img class="calendar_images" src="img/calendar/<?php echo $array['photo']; ?>" ></img> </DIV>
          <font class="news_text"><?php echo $array['title_'.$lang_current]; ?></font>
		<?php } 
			else { ?><img class="news_img" src="images/news/0.jpg" ></img> <?php } ?>
		
		<?php //echo  "&nbsp;".$array['text_short_'.$lang_current]."  ... "; ?>
		<!-- <DIV style="text-align:right; padding:2px 0px;"><IMG src="detailed.jpg" width="100px;"></IMG></DIV> -->
		<DIV style="float:right; margin-top:5px; text-align:center; padding:5px 0px; width:100px;   font-size: 14px;
		font-family:tahoma;font-style: italic; font-weight:normal; color:#E67715;">>> <!-- background-color:#E67715; color:#FFE67F; -->
		<?php echo $array_detailed[$lang_current];?></DIV>
        </a>
    </DIV>
	<STYLE>
		.calendar_images {
		width:100px;
		height:66px;
		padding-top:5px;
		}
	</STYLE>

         <?php 
        echo $row_end_cal;
   } // foreach
?>
</DIV>
<DIV style="clear:both; padding-top:5px;">
<?php
include "pagination_jquery_cal.php";	
?>
</DIV>
<?php
   }
?>
