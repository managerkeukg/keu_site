<STYLE>
.info {
   clear:both;
   padding-top:10px;
}
.info a {
  color:blue;
  font-size:12px;
}
</STYLE>

<?php 
require_once "common_data/config.php";
require_once "common_data/functions/f_is_int.php";
require_once "common_data/classes/ClassTable.php";
require_once "common_data/classes/ClassTableQuery.php";

$object = new TableQuery;
$data_array=$object-> query("SELECT * FROM `keu_news` where `status`='1'  ORDER BY `id`");
//echo "<pre>"; print_r($data_array); echo "</pre>";
if (isset($data_array) AND !empty ($data_array)) {
	foreach ($data_array as $key=>$value) {
		$new_array[$value['id']]= $value;
	    
	}
	rsort($new_array);
	foreach ($new_array as $key=>$value) {
		$new2_array[$value['id']]= $value;
	    
	}
	//echo "<pre>"; print_r ($new2_array); echo "<pre>";
    $data_array=$new2_array;
	?>
	<DIV style="padding:10px 10px; width:300px; float:right; text-align:left;"> <!-- background-color:#2B8ADC; -->
	<?php
	foreach ($data_array as $key => $value) {
?>
<DIV class="info">
	<hr>
	<a href="index.php?show=100&id=<?php echo $value['id']; ?>">
	   <DIV style="float:left; "><IMG width="100px" src="img/news/<?php echo $value['image']; ?>"></IMG></DIV>
	   <DIV style="font-size:12px; padding-left:115px;"><?php echo $value[$lang_current.'_title']; ?></DIV>
	</a>
</DIV>


<?php
	} ?>
	 </DIV>
	<?php
	if (isset($_GET['id']) AND !empty($_GET['id'])) { is_int_ ($_GET['id']); $id_news=$_GET['id']; ?>
       <DIV style="padding-left:20px; padding-right:340px;">
       <?php echo "<h3>".$data_array[$id_news][$lang_current.'_title']."</h3>";
       ?>
	   <!-- <DIV style="float:left; width:250px; padding-left:100px; padding-right:10px;">
	         <IMG  width="250px" src="img/news/<?php echo $data_array[$id_news]['image'] ?>"></IMG>
	   </DIV> -->
	   
       <?php echo $data_array[$id_news][$lang_current.'_text']; ?>
	   </DIV>
	   <?php 
			$object_images = new TableQuery;
			$news_image_array=$object_images-> query("SELECT * FROM `keu_news_files` where `status`='1' AND `news_id`=".$id_news." ORDER BY `id`");
			//echo "<pre>"; print_r($data_array); echo "</pre>";
			if (isset($news_image_array) AND !empty ($news_image_array)) {
				?>
				<script src="js/jquery.min.js"></script>
				<script>
				$(function(){
					$('.fadein img:gt(0)').hide();
					setInterval(function(){$('.fadein :first-child').fadeOut().next('img').fadeIn().end().appendTo('.fadein');}, 3000);
				});
				</script>
				<style>
				.fadein { position:relative; height:400px; }
				.fadein img { position:absolute; left:0; top:0; }
				</style>
				<DIV style="padding-left:100px; width:710px;">
				<div class="fadein">
				<?php $i_image="0";
				foreach ($news_image_array as $key =>$value) {
					$i_image++; if ($i_image=="1") {$image_display='style="display: block;"';} else {$image_display='style="display: none;"';}
					?>
					
						<IMG src="img/news/news/<?php echo $value['image']; ?>" <?php echo $image_display;?> height="400px"></IMG>
						<?php //echo "<BR>".$value['name_'.$lang_current]; ?>					
                    <?php
				//echo "<BR><BR><IMG src=\"img/news/news/".$value['image']."\" width=\"700px\" ></IMG>";
				//echo "<BR>".$value['name_'.$lang_current];
				}
				?>
				</div>
				</DIV>
				<?php
			}
	}
}


?>