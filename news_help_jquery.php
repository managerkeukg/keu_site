<style>
.trborder { padding-top: 10px; } 

.pages_div {
   /*border:1px solid aqua; */
   padding:2px 2px;
}

.display {
   display:block;
}
.display_none {
   display:none;
}
</style> 
<?php 
$show_by=$array_xml_news['records_viewed'];
?>
<script src="js/jquery.min.js"></script>
<script>
var tot_records = <?php echo count($data_array);?>;
var show_by=<?php echo $show_by; ?>;
var current_news =1;
</script>
<?php
  if (isset($data_array) AND !empty($data_array))
  {
	  $tot_records=count($data_array);
	  $tot_pages=(int)($tot_records/$show_by); 
	  if((float)($tot_records/$show_by) - $tot_pages != 0) {$tot_pages++;}
	  //echo "pages ".$tot_pages;
	  $current_page=1; //echo (float)(1/4);
  $i=0;
  ?>
  <script>
      var tot_pages = <?php echo $tot_pages;?>;
  </script>
  <DIV id="page_1"  class="pages_div display">
  <?php
  foreach ($data_array as  $array)
  {  
	  $i++;  if($i % 2 == 0) {  $bgcolor="silver"; } else {  $bgcolor="white"; }
	  if((float)($i/$show_by) - $current_page != 0) {$row_end="";} 
	  else {$current_page++; 
	    if($i==$tot_records) {$row_end="";} else 
			{$row_end="</DIV><DIV id=\"page_".$current_page."\"  class=\"pages_div display_none\" >"; }
	  }
		?>	
    
    <DIV id="news_<?php echo $i; ?>" class="news_block" style="clear:both; padding-bottom:5px; font-size:12px; text-decoration: none; text-align:left;">
		<!-- <DIV><IMG src="news_line.jpg" style="width:100%; margin:0px auto; "></IMG></DIV> -->
		<HR>
		<a href="index.php?show=100&id=<?php echo $array['id'];?>" style="color: #2562ad;">
		  <DIV style="float:left; padding-right:5px;">
			<?php if (!empty($array['image'])) { ?>
			  <img style="width:100px; height:66px;" src="img/news/<?php echo $array['image']; ?>" ></img> 
			<?php } 
				else { ?><img class="news_img" src="images/news/0.jpg" ></img> <?php } ?>
		  </DIV>
		  <font class="news_text">
			<?php echo  "&nbsp;".$array[$lang_current.'_title']; ?>
		  </font>
		  
		
			<?php //echo  "&nbsp;".$array['date']; ?>
			<!-- <DIV style="text-align:right; padding:2px 0px;"><IMG src="detailed.jpg" width="100px;"></IMG></DIV> -->
			<DIV style="float:right; margin-top:5px; text-align:center; padding:5px 0px; width:100px;   font-size: 14px; font-family:tahoma; font-style: italic; font-weight:normal; color:#E67715;">>> <!-- background-color:#E67715; color:#FFE67F; -->
					<?php echo $array_detailed[$lang_current];?>
			</DIV>
	    </a>
    </DIV>
         <?php 
			 echo $row_end;
   } // foreach
?>
</DIV>
<DIV style="clear:both; padding-top:5px;">
<?php
include "pagination_jquery.php"; echo "<a href=\"http://178.217.173.109/portal/news_archieve/\" target=\"_blank\">Архив новостей</a>";	
?>
</DIV>
<?php
   }
?>
