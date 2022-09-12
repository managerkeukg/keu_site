<STYLE>
.social-popout {
	height: 24px;
	width: 24px;
	margin: 10px;
	float: left;
	-webkit-transition: all ease 0.5s;
	-moz-transition: all ease 0.5s;
	-o-transition: all ease 0.5s;
	-ms-transition: all ease 0.5s;
	transition: all ease 0.5s;
}
.social-popout img {
	height: 24px;
	width: 24px;
	border-radius: 50%;
	margin: 8px;
	width: 100%;
	box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.8);
	-webkit-transition: all ease 0.5s;
	-moz-transition: all ease 0.5s;
	-o-transition: all ease 0.5s;
	-ms-transition: all ease 0.5s;
	transition: all ease 0.5s;
}
.social-popout img:hover {
	margin: 0px;
	box-shadow: 6px 6px 4px 4px rgba(0,0,0,0.3);
}
</STYLE>
<?php 
require_once "common_data/config.php";
require_once "common_data/classes/ClassTable.php";
require_once "common_data/classes/ClassTableQuery.php";

$object = new TableQuery;
$data_array=$object-> query("SELECT * FROM `keu_social` where `status`='1'  ORDER BY `order`"); //DESC LIMIT 0, 5
//echo "<pre>"; print_r($data_array); echo "</pre>";
if (isset($data_array) AND !empty($data_array))
  {   
	  foreach ($data_array as  $key=>$value)
	  {  ?>
		 <div class="social-popout"><a href="<?php echo $value['link']; ?>" target="_blank"><img src="img/icons/social/<?php echo $value['image']; ?>" /></a></div>	
         <?php
	  }
      
  }
?>
    <!--
	<div class="social-popout"><a href="http://ok.ru/keu.edu" target="_blank"><img src="img/icons/social/o.jpg" /></a></div>
	<div class="social-popout"><a href="https://instagram.com/" target="_blank"><img src="img/icons/social/ins.jpg" /></a></div>
	<div class="social-popout"><a href="http://twitter.com/keukg" target="_blank"><img src="img/icons/social/twitter-48circle.png" /></a></div>
	<div class="social-popout"><a href="http://plus.google.com/keukg/" target="_blank"><img src="img/icons/social/googleplus-48circle.png" /></a></div> -->
