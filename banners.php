<?php 
require_once "common_data/config.php";
require_once "common_data/classes/ClassTable.php";
require_once "common_data/classes/ClassTableQuery.php";

$object = new TableQuery;
$data_array=$object-> query("SELECT * FROM `keu_banners_left` where `status`='1'  ORDER BY `order`");
//echo "<pre>"; print_r($data_array); echo "</pre>";

  if (isset($data_array) AND !empty($data_array))
  {
	$i=0;
	foreach ($data_array as  $array)
	{  
	  //$i++;  if($i % 2 == 0) {  $bgcolor="silver"; } else { $bgcolor="white"; }
		?>	
		<DIV style="width:240px;  margin:0px auto; padding-top:20px;">
		<A href="<?php echo $array['link']; ?>" target="_blank"><IMG SRC="img/banners/<?php echo $array['image']; ?>" width="240px"></IMG></A>
		</DIV>  
         <?php 
	} // foreach
  }
?>