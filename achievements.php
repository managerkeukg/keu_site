<?php 
require_once "common_data/config.php";
require_once "common_data/classes/ClassTable.php";
require_once "common_data/classes/ClassTableQuery.php";

$object = new TableQuery;
$data_array=$object-> query("SELECT * FROM `keu_achievements` where `status`='1'  ORDER BY `id` DESC");

//echo "<pre>"; print_r($data_array); echo "</pre>";

  if (isset($data_array) AND !empty($data_array))
  {
  $i=0;
  foreach ($data_array as  $array)
  {  
	  $i++;  if($i % 2 == 0) {  $bgcolor="silver"; } else { $bgcolor="white"; }
		?>	
    <DIV class="news_block" style="clear:both; padding-bottom:5px; font-size:12px; text-decoration: none; text-align:left;">
	    <hr>
		<a href="index.php?show=130&id=<?php echo $array['id'];?>" style="color: #2562ad;">
		<?php if (!empty($array['photo'])) { ?>
		  <DIV style="padding-right:5px;"><img class="achievements_images" src="img/achievements/<?php echo $array['photo']; ?>" ></img> </DIV>
		<?php } 
			else { ?><img class="news_img" src="images/news/0.jpg" ></img> <?php } ?>
		</a>
		<?php echo "&nbsp;&nbsp;&nbsp;".$array['title_'.$lang_current]; ?>
    </DIV>
	<STYLE>
		.achievements_images {
		width:100px;
		padding-top:5px;
		}
	</STYLE>

         <?php 

   } // foreach
   }
?>
