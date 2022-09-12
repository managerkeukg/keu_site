<?php
$array_frontpage_small= array (
                    "college" => array ("eng" => "Liceum, College ",
					                 "kg" =>  "Лицей, Колледж",
					                 "ru" =>  "Лицей, Колледж"  // Институт Непрерывного Открытого Образования
					                ),
                    "bachelor" => array ("eng" => "Undergraduate",
					                 "kg" =>  "Бакалавриат",
					                 "ru" =>  "Бакалавриат"  // Институт Непрерывного Открытого Образования
					                ),
                    "magister" => array ("eng" => "Magistracy",
					                 "kg" =>  "Магистратура",
					                 "ru" =>  "Магистратура"  // Институт Непрерывного Открытого Образования
					                ),
                    "inoo" => array ("eng" => "Distant Education",
					                 "kg" =>  "Узактан Билим Алуу", // Узгултуксуз жана Ачык Билим Алуу Институту
					                 "ru" =>  "Дистанционное Образование"  // Институт Непрерывного Открытого Образования
					                ),
                    "portal" => array ("eng" => "Education portal",
					                 "kg" =>  "Билим алуу порталы",
					                 "ru" =>  "Образовательный <BR> портал"
					                ),
                    "phd" =>    array ("eng" => "Phd, Master Degrees ",
					                 "kg" =>  "Докторантура Магистратура",
					                 "ru" =>  "Докторантура Магистратура"
					                ),
                    "journal" =>  array ("eng" => "Journal ",
					                 "kg" =>  "Журнал",
					                 "ru" =>  "Журнал"
					                ),
                    "enrollment_committee" =>  array ("eng" => "Enrollment Committee ",
					                 "kg" =>  "Кабыл алма комиссиясы",
					                 "ru" =>  "Приёмная комиссия"
					                )
                  );
?>
<DIV style="clear:both; outline:0px solid red; width:1045px; padding-top:20px; margin:0px auto;">
     <DIV class="menu_blocks">
	    <a href='' target="_blank">
		   <!-- <DIV style="float:left; padding-top:5px; height:70px;"><IMG SRC="http://inoo.keu.kg/images/emblema.jpg" height="50px"></IMG></DIV> -->
		   <DIV style="padding-top:20px;"><span><?php echo $array_frontpage_small['college'][$lang_current];?></span></DIV>
		</a>
	 </DIV>
	 <DIV class="menu_blocks"> 
	    <a href='http://www.keu.page.kg/' target="_blank">
		   <!-- <DIV style="float:left; height:70px;"><IMG SRC="http://inoo.keu.kg/images/emblema.jpg" height="50px"></IMG></DIV> -->
		   <DIV style="padding-top:20px;"><span><?php echo $array_frontpage_small['bachelor'][$lang_current];?></span></DIV>
		</a>
	 </DIV>
	 <DIV class="menu_blocks"> 
	     <a href=""> 
		   <DIV style="padding:20px 0px;"> <?php echo $array_frontpage_small['magister'][$lang_current];?> </DIV>
		   <!-- <DIV style="padding-top:7px;"> <?php echo $array_frontpage_small['phd'][$lang_current];?> </DIV> -->
		 </a>
	 </DIV>
	 <DIV class="menu_blocks"> 
	    <a href="http://inoo.keu.kg/">
		   <DIV style="padding:20px 0px;"><?php echo $array_frontpage_small['inoo'][$lang_current];?></DIV>
        </a>
	 </DIV>
	 <DIV class="menu_blocks"> 
	    <a href="">
		   <DIV style="padding:20px 0px;"><?php echo $array_frontpage_small['enrollment_committee'][$lang_current];?></DIV>
        </a>
	 </DIV>
</DIV>
