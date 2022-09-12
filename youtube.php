<?php 
require_once "common_data/config.php";
require_once "common_data/classes/ClassTable.php";
require_once "common_data/classes/ClassTableQuery.php";

$object = new TableQuery;
$data_array=$object-> query("SELECT * FROM `keu_video_youtube` where `status`='1'  ORDER BY `order`");

//echo "<pre>"; print_r($data_array); echo "</pre>";

  if (isset($data_array) AND !empty($data_array))
  {
  $i=0;
  foreach ($data_array as  $array)
  {  
	  $i++;  if($i % 2 == 0) {  $bgcolor="silver"; } else { $bgcolor="white"; }
		?>	
		<DIV class="youtube_frame">
		<iframe id="ytplayer<?php echo $array['id'];?>" type="text/html" width="240" height="160"
src="https://www.youtube.com/embed/<?php echo $array['link'];?>"
frameborder="0" allowfullscreen></iframe>
        </DIV>
    
         <?php 

   } // foreach
   }
?>
<STYLE>
.youtube_frame {
    padding:2px 2px;
}
</STYLE>