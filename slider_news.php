<script src="js/jquery.min.js"></script>
<script>
$(function(){
	/*
	$('.fadein div img:gt(0)').hide();
	setInterval(function(){$('.fadein div:first-child').fadeOut().next('img').fadeIn().end().appendTo('.fadein');}, 3000);
	
	$('#1').hide(3000);
	$('#2').show(1000);
	$('#2').hide(1000);
    $('#3').show(1000);
    $('#3').hide(1000);
	*/
    //$('#simple_slider').css({'backgroundColor' : '#000', 'color':'#fff', 'padding-top':'100px'});
    $('#1').hide(3000);
	$('#2').css({'display' : 'block'});
	$('#2').hide(3000);
	$('#3').css({'display' : 'block'});
	
});
</script>
<style>
.fadein { position:relative;}
.fadein img { position:absolute; left:0; top:0;  width:900px; border:10px solid white;}
</style>

<?php
    require_once "common_data/classes/ClassTableQuery.php";
	$object=new TableQuery;
	$slider_array=$object->query ("SELECT * from `keu_news` where `status`='1'");
	
	//print_r($slider_array);
	foreach ($slider_array as $key=>$value) 
	{
	   if(!empty($value['image_slider']))
		{
	    $slider_images_array[$value['id']]= $value['image_slider'];
	   }
	}
	//print_r($slider_images_array);
	if (isset($slider_images_array) AND !empty($slider_images_array))
	{
	   ?>
	   <DIV id="simple_slider" style="outline:0px solid blue; width:900px; margin:0px auto; padding-top:0px; padding-bottom:20px; float:left; ">
	   <div class="fadein">
	   <?php $j=0;
	   foreach ($slider_images_array as $key=>$value) 
	   { $j++; if($j==1) {$slider_style="style=\"display: block;\"";} else {$slider_style="style=\"display: none; \"";}
          echo "
		        <div id=\"".$key."\" $slider_style ><a href=\"index.php?show=100&id=".$key."\"><IMG src=\"img/news/slider/".$value."\"  ></IMG></a></div>
				";
				// <a href=\"index.php?show=100&id=".$key."\"></a>
		        
	   }
	   ?>
		</div>
		</DIV>
	   <?php
	}
?>