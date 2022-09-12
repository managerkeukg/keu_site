<script src="js/jquery.min.js"></script>
<script>
$(function(){
	$('.fadein img:gt(0)').hide();
	setInterval(function(){$('.fadein :first-child').fadeOut().next('img').fadeIn().end().appendTo('.fadein');}, 3000);
});
</script>
<style>
.fadein { position:relative;}
.fadein img { position:absolute; left:0; top:0;  width:900px; border:10px solid white;}
</style>
<DIV id="simple_slider" style="outline:0px solid blue; width:900px; margin:0px auto; padding-top:0px; padding-bottom:20px; float:left; ">
	<div class="fadein">
		<img src="images/slider_simple/h1.jpg" style="display: block;">
		<img src="images/slider_simple/h2.jpg" style="display: none;">
		<img src="images/slider_simple/h3.jpg" style="display: none;">
		<!-- <img src="images/slider_simple/h4.jpg" style="display: none;"> -->
	</div>
</DIV>