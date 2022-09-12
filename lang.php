<?php 
$request_uri=$_SERVER['REQUEST_URI']; $request_uri = str_replace('&', '{', $request_uri); 
require_once "common_data/config.php";
require_once "common_data/classes/ClassTable.php";
require_once "common_data/classes/ClassTableQuery.php";

$object = new TableQuery;
$data_array=$object-> query("SELECT * FROM `keu_languages` where `status`='1'  ORDER BY `order`"); //DESC LIMIT 0, 5
//echo "<pre>"; print_r($data_array); echo "</pre>";
if (isset($data_array) AND !empty($data_array))
  {   ?>
      <DIV style="padding-top:40px;">
	  <?php
	  foreach ($data_array as  $key=>$value)
	  {  ?>
			<a id="<?php echo $value['link']; ?>" href="language.php?lang=<?php echo $value['link']; ?>"  >
			<IMG src="img/flags/<?php echo $value['image']; ?>" class="flags"></IMG></a></li>
         <?php
        // &url=<? php echo $request_uri; ? >
	  }
      ?>
	  </DIV>
	  <?php
  }
?>
<STYLE>
.flags {
  width:30px;
  padding-left:10px;
}
</STYLE>