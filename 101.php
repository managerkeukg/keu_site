<link rel="stylesheet" type="text/css" href="style/originhover/hover.css" />
<link rel="stylesheet" type="text/css" href="style/originhover/style1.css" />
<link rel="stylesheet" type="text/css" href="style/originhover/style2.css" />
<link rel="stylesheet" type="text/css" href="style/originhover/style3.css" />
<link rel="stylesheet" type="text/css" href="style/originhover/style4.css" />
<link rel="stylesheet" type="text/css" href="style/originhover/style5.css" />
<link rel="stylesheet" type="text/css" href="style/originhover/style6.css" />
<link rel="stylesheet" type="text/css" href="style/originhover/style7.css" />
<link rel="stylesheet" type="text/css" href="style/originhover/style8.css" />
<link rel="stylesheet" type="text/css" href="style/originhover/style9.css" />
<link rel="stylesheet" type="text/css" href="style/originhover/style10.css" />
<STYLE>
a{
	color: #fff;
	text-decoration: none;
}
.cols {
   float:left;
   height:300px;
   width:362px;
   background-color:#1D459C; /*#FF182B*/
   text-align:center;
   margin: 5px 5px;
  
}

.cols_image {
   width:358px;
}
.cols_text {
   text-align:left;
   padding-left:10px;
   padding-top:240px;
   color:white;
   font-size:13px;
}
a.colored { 
    color:white; /* Цвет ссылок */ 
}
</STYLE>
<?php
require_once "common_data/config.php";
require_once "common_data/functions/f_is_int.php";
require_once "common_data/classes/ClassTable.php";
require_once "common_data/classes/ClassTableQuery.php";

	require_once "common_data/functions/f_xml2array.php";
	$frontpage_settings = file_get_contents("kel_data_admin/xml/frontpage.xml");
	$xml_array_frontpage = simplexml_load_string($frontpage_settings);
	$array_frontpage_xml= array();
	$array_frontpage_xml= xml2array($xml_array_frontpage);

$object = new TableQuery;
$data_array=$object-> query("SELECT * FROM `keu_abiturients` where `status`='1'  ORDER BY `id`");
//echo "<pre>"; print_r($data_array); echo "</pre>";
if (isset($data_array) AND !empty ($data_array)) {
    ?>
	 <h2 style="color:black; padding-left:100px;"><?php echo $array_frontpage_xml['frontpage_abiturients_name_'.$lang_current]; ?></h2>
     <DIV style="outline:0px solid green; margin:0px 75px;">
    <?php
      foreach ($data_array as $key => $value)
	{
		$new_array[$value['order']]=$value;
	} 
	require_once "common_data/functions/f_sort_array_keys.php";
	$ordered_array=sort_array_keys ($new_array);
	//echo "<pre>"; print_r($ordered_array); echo "</pre>";

    $effect_hover= array ("1"=>"first", "2"=>"tenth", "3"=>"third", "4"=>"sixth", "5"=>"fourth", "6"=>"sixth"
		                 );
     $i=0;
     foreach ($ordered_array as $key => $value)
	{ $i++;
	  $link_url="";   if (empty($value['link'])) { $link_url="index.php?show=201&id=".$value['id']; } 
              else { $link_url=$value['link']." \" target=\"_blank ";}
	  ?>
       <DIV class="cols">
						<div class="view <?php echo "view-".$effect_hover[$i]; ?>">
							<img src="images/abit/<?php echo $value['photo']; ?>" />
							<div class="mask">
								<h2><?php echo $value['name_'.$lang_current]; ?></h2>
								<p><?php echo $value['title_short_'.$lang_current]; ?></p>
								<a href="<?php echo $link_url; ?>" class="info">
								<?php  echo $value['next_'.$lang_current]; ?></a>
							</div>
						</div>  
			<DIV class="cols_text">
				 <a href="<?php echo $link_url; ?>" class="colored" >
				 <p><?php echo $value['name_'.$lang_current]; ?></p>
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