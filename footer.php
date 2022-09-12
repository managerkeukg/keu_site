<STYLE>
.footer_blocks {
width:22%; 
font-size:14px; 
text-align: left;
float:left; 
outline:0px solid red;
padding-left:20px;
}

.footer_block {
outline:0px solid red;
height:100px;
}
</STYLE>


<DIV class="footer_block">
    <DIV class="footer_blocks"> 
	   <DIV style="width:100%;">
	     <IMG src="img/icons/building.png" height="80px"></IMG>
	   </DIV>   
	</DIV>
	<DIV class="footer_blocks">  
	   <DIV style="float:left; height:90px; padding-right:10px;"><IMG src="img/icons/footer_address.png" width="33px"></IMG></DIV>
	   <DIV style="width:100%;"> <?php echo $array_footer['address'][$lang_current]; ?>: </DIV>
	   <DIV style="width:100%; padding-top:10px;"> <?php echo  $array_footer_address['0'][$lang_current]; ?></DIV> 
	   <DIV style="width:100%;"> <?php echo  $array_footer_address['1'][$lang_current]; ?></DIV> 
	   <DIV style="width:100%;"> 720033</DIV>   
	</DIV>

	<DIV class="footer_blocks"> 
	   <DIV style="float:left; height:90px; padding-right:10px;"><IMG src="img/icons/footer_mobile.png" width="33px"></IMG></DIV>
	   <DIV style="width:100%;"><?php echo $array_footer['phone'][$lang_current]; ?>: </DIV>
	   <DIV style="width:100%; padding-top:10px;">0(312)-32-51-19</DIV> 
	   <DIV style="width:100%;">0(312)-32-55-39</DIV>   
	</DIV>

	<DIV class="footer_blocks"> 
	   <DIV style="float:left; height:90px; padding-right:10px;"><IMG src="img/icons/footer_email.png" width="33px"></IMG></DIV>
	   <DIV style="width:100%;"><?php echo $array_footer['email'][$lang_current]; ?>: </DIV>
	   <DIV style="width:100%; padding-top:10px;">office@keu.kg</DIV> 
	   <DIV style="width:100%;"><!-- itc@keu.kg --></DIV>   
	</DIV>
    <?php 
	include "mail_ru_simple.php"; 
	?>
	
</DIV>
