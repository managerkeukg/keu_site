<style>
.metro_news { padding-top:0;}
.metro_news .tr { padding-top:20; background:blue}
.metro_news .news_head { font-weight:bold ; padding-top:10; margin: 5px 0; }
.metro_news .news_head a:hover { color: blue; }
.metro_news .news_text {padding-left: 10px; }
.metro_news .news_img {border:2px; width:100 }

.trborder { padding-top: 10px; } 

.btn2 { display:none;}
</style> 
<?php $show_by=4 ; ?>
<script src="js/jquery.min.js"></script>
<script>
var tot_records = <?php echo count($data_array);?>;
var show_by=<?php echo $show_by; ?>;
var stop_next=tot_records-show_by;
var current_news =1;
var next_news=0;
var prev_news=0;
var to_hide=0;


$(document).ready(function(){
    $(".btn1").click(function(){
        //$("p").hide(200);
		//alert(current_news);
		$("#news_"+current_news).hide(300);
        next_news=current_news+show_by;
		$("#news_"+next_news).show(300);
		
		if (current_news>1) {$(".btn2").show(300);} else {$(".btn2").hide(300);}
		if (current_news==2) {alert('last record'+current_news);}
		current_news++;
		

    });
    $(".btn2").click(function(){
        prev_news=current_news - 1;
		current_news=prev_news;
		$("#news_"+prev_news).show(300);
        to_hide=current_news+show_by;
		$("#news_"+to_hide).hide(300);

    });
	
});
</script>
<?php
  if (isset($data_array) AND !empty($data_array))
  {
  $i=0;
  foreach ($data_array as  $array)
  {  
	  $i++;  if($i % 2 == 0) {  $bgcolor="silver"; } else {  $bgcolor="white"; }
		?>	
    <DIV id="news_<?php echo $i; ?>" class="news_block" style="clear:both; padding-bottom:5px; font-size:12px; text-decoration: none; text-align:left; <?php if ($i > $show_by) {echo "display:none;";} ?>">
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

   } // foreach
?>
<DIV style="clear:both; padding-top:20px;">
<!-- <p>This is a paragraph.</p>
<DIV id="1news">text1</DIV>
<DIV id="2news">text2</DIV> -->
<DIV style="">  <a class="btn2"> < < <?php echo $array_prev_news[$lang_current]; ?> </a>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   <a class="btn1"> <?php echo $array_next_news[$lang_current]; ?> > > </a> </DIV>

<!-- <button class="btn2">Show</button> -->


<?php

	
	?>
</DIV>
<?php
   }
?>
