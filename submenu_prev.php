<!--<DIV class="lanit-rea-header-top lanit-rea-header-nav">
    <DIV class="lanit-rea-header-top-wrap">
         <ul class="lanit-rea-header-top-lang">
                <li><a id="kg" href="">Кыр</a></li>
                <li><a id="ru" href=""  class="lanit-rea-header-top-lang-cur">Рус</a></li>
                <li><a id="en" href="">Eng</a></li>
        </ul> -->
<?php
    $submenu_array="";
    if ($show==9 
		OR $show==25 OR $show==26 OR $show==27 OR $show==28 OR $show==29
		OR $show==30 OR $show==31 OR $show==32 OR $show==33 OR $show==34 
		OR $show==35 
		) { 
		$submenu_array[]= array ( 'name'=>"ЭКОНОМИЧЕСКОЙ ТЕОРИИ И МИРОВОЙ ЭКОНОМИКИ",
			                      'short_name'=>"ЭКОНОМИЧЕСКОЙ ТЕОРИИ  И <BR> МИРОВОЙ ЭКОНОМИКИ",
			                      'page'=>"25",
			                      'link'=>"index.php?show=25"			                      
			                    );
        $submenu_array[]= array ( 'name'=>"ФИНАНСОВ И КРЕДИТА им. С.А.Сулайманбекова",
			                      'short_name'=>"ФИНАНСОВ И КРЕДИТА  <BR> им. С. А. Сулайманбекова",
			                      'page'=>"26",
			                      'link'=>"index.php?show=26"
			                    );
        $submenu_array[]= array ( 'name'=>"БУХГАЛТЕРСКОГО УЧЕТА, АНАЛИЗА И АУДИТА",
			                      'short_name'=>"БУХГАЛТЕРСКОГО УЧЕТА, <BR>  АНАЛИЗА И АУДИТА",
			                      'page'=>"27",
			                      'link'=>"index.php?show=27"
			                    );
        $submenu_array[]= array ( 'name'=>"ТУРИЗМА, ГОСТЕПРИИМСТВА И ПРЕДПРИНИМАТЕЛЬСТВА",
			                      'short_name'=>"ТУРИЗМА, ГОСТЕПРИИМСТВА И <BR>  ПРЕДПРИНИМАТЕЛЬСТВА",
			                      'page'=>"28",
			                      'link'=>"index.php?show=28"
			                    );
        $submenu_array[]= array ( 'name'=>"ПРИКЛАДНОЙ ИНФОРМАТИКИ",
			                      'short_name'=>"ПРИКЛАДНОЙ  <BR> ИНФОРМАТИКИ",
			                      'page'=>"29",
			                      'link'=>"index.php?show=29"
			                    );
        $submenu_array[]= array ( 'name'=>"ТОВАРОВЕДЕНИЯ И ЭКСПЕРТИЗЫ ТОВАРОВ",
			                      'short_name'=>"ТОВАРОВЕДЕНИЯ И  <BR> ЭКСПЕРТИЗЫ ТОВАРОВ",
			                      'page'=>"30",
			                      'link'=>"index.php?show=30"
			                    );
        $submenu_array[]= array ( 'name'=>"МАТЕМАТИКИ И ЕСТЕСТВЕННО-НАУЧНЫХ ДИСЦИПЛИН",
			                      'short_name'=>"МАТЕМАТИКИ И ЕСТЕСТВЕННО -<BR> НАУЧНЫХ ДИСЦИПЛИН",
			                      'page'=>"31",
			                      'link'=>"index.php?show=31"
			                    );
        $submenu_array[]= array ( 'name'=>"ГОСУДАРСТВЕННОГО И ОФИЦИАЛЬНОГО ЯЗЫКОВ",
			                      'short_name'=>"ГОСУДАРСТВЕННОГО <BR>  И  ОФИЦИАЛЬНОГО ЯЗЫКОВ",
			                      'page'=>"32",
			                      'link'=>"index.php?show=32"
			                    );
        $submenu_array[]= array ( 'name'=>"ИНОСТРАННЫХ ЯЗЫКОВ",
			                      'short_name'=>"ИНОСТРАННЫХ  <BR> ЯЗЫКОВ",
			                      'page'=>"33",
			                      'link'=>"index.php?show=33"
			                    );
        $submenu_array[]= array ( 'name'=>"ФИЛОСОФИИ И СОЦИАЛЬНО -ГУМАНИТАРНЫХ НАУК",
			                      'short_name'=>"ФИЛОСОФИИ И СОЦИАЛЬНО <BR>  -ГУМАНИТАРНЫХ НАУК",
			                      'page'=>"34",
			                      'link'=>"index.php?show=34"
			                    );
        $submenu_array[]= array ( 'name'=>"ЭКОНОМИКИ, МЕНЕДЖМЕНТА И МАРКЕТИНГА",
			                      'short_name'=>"ЭКОНОМИКИ, МЕНЕДЖМЕНТА <BR>  И МАРКЕТИНГА",
			                      'page'=>"35",
			                      'link'=>"index.php?show=35"
			                    );
	    }

    if ($show==8 
		OR $show==10 OR $show==11  OR $show==12 OR $show==13 OR $show==14 OR $show==15
		OR $show==17 OR $show==42 OR $show==39 OR $show==18 OR $show==46 OR $show==47 
		OR $show==87 OR $show==86
		) { 
		$submenu_array[]= array ( 'name'=>"Постановления",
			                      'short_name'=>"Постановления",
			                      'page'=>"10",
			                      'link'=>"index.php?show=10"			                      
			                    );
        $submenu_array[]= array ( 'name'=>"ФЛАГ, ЭМБЛЕМА, Г И М Н",
			                      'short_name'=>"ФЛАГ, ЭМБЛЕМА, Г И М Н",
			                      'page'=>"11",
			                      'link'=>"index.php?show=11"
			                    );
        $submenu_array[]= array ( 'name'=>"РЕКТОР КЭУ",
			                      'short_name'=>"РЕКТОР КЭУ",
			                      'page'=>"12",
			                      'link'=>"index.php?show=12"
			                    );
        $submenu_array[]= array ( 'name'=>"ВМЕСТО ПРЕДИСЛОВИЯ",
			                      'short_name'=>"ВМЕСТО ПРЕДИСЛОВИЯ",
			                      'page'=>"13",
			                      'link'=>"index.php?show=13"
			                    );
        $submenu_array[]= array ( 'name'=>"ИСТОРИЯ КЭУ",
			                      'short_name'=>"ИСТОРИЯ КЭУ",
			                      'page'=>"14",
			                      'link'=>"index.php?show=14"
			                    );
        $submenu_array[]= array ( 'name'=>" 60-летие КЭУ",
			                      'short_name'=>"60-летие КЭУ <BR> Поздравления",
			                      'page'=>"86",
			                      'link'=>"index.php?show=86"
			                    );
        $submenu_array[]= array ( 'name'=>"ДОСТИЖЕНИЯ УНИВЕРСИТЕТА",
			                      'short_name'=>"ДОСТИЖЕНИЯ УНИВЕРСИТЕТА",
			                      'page'=>"87",
			                      'link'=>"index.php?show=87"
			                    );
        $submenu_array[]= array ( 'name'=>"ОБРАЗОВАТЕЛЬНАЯ ДЕЯТЕЛЬНОСТЬ",
			                      'short_name'=>"ОБРАЗОВАТЕЛЬНАЯ ДЕЯТЕЛЬНОСТЬ",
			                      'page'=>"15",
			                      'link'=>"index.php?show=15"
			                    );
        $submenu_array[]= array ( 'name'=>"НАУКА И ИССЛЕДОВАНИЯ",
			                      'short_name'=>"НАУКА И ИССЛЕДОВАНИЯ",
			                      'page'=>"18",
			                      'link'=>"index.php?show=18"
			                    );
        $submenu_array[]= array ( 'name'=>"СТУДЕНЧЕСКАЯ ЖИЗНЬ",
			                      'short_name'=>"СТУДЕНЧЕСКАЯ ЖИЗНЬ",
			                      'page'=>"46",
			                      'link'=>"index.php?show=46"
			                    );
        $submenu_array[]= array ( 'name'=>"СТУДЕНТЫ ЗА РУБЕЖОМ",
			                      'short_name'=>"СТУДЕНТЫ ЗА РУБЕЖОМ",
			                      'page'=>"47",
			                      'link'=>"index.php?show=47"
			                    );
        $submenu_array[]= array ( 'name'=>"УЧЕБНО - МЕТОДИЧЕСКИЙ ОТДЕЛ",
			                      'short_name'=>"УЧЕБНО - МЕТОДИЧЕСКИЙ ОТДЕЛ",
			                      'page'=>"17",
			                      'link'=>"index.php?show=17"
			                    );
        $submenu_array[]= array ( 'name'=>"КОМИТЕТ ПО ДЕЛАМ МОЛОДЕЖИ",
			                      'short_name'=>"КОМИТЕТ ПО ДЕЛАМ МОЛОДЕЖИ",
			                      'page'=>"42",
			                      'link'=>"index.php?show=42"
			                    );
        $submenu_array[]= array ( 'name'=>"НАУЧНАЯ БИБЛИОТЕКА",
			                      'short_name'=>"НАУЧНАЯ БИБЛИОТЕКА",
			                      'page'=>"39",
			                      'link'=>"index.php?show=39"
			                    );
        

        }

		if ($show==7 
		OR $show==16 OR $show==19  OR $show==20 OR $show==21 OR $show==22 OR $show==23
		OR $show==24 OR $show==36 OR $show==37 OR $show==38 OR $show==40 OR $show==41
        OR $show==43 OR $show==44 OR $show==45 

		) { 
		$submenu_array[]= array ( 'name'=>"УЧЕБНО - МЕТОДИЧЕСКИЙ ОТДЕЛ",
			                      'short_name'=>"УЧЕБНО - МЕТОДИЧЕСКИЙ ОТДЕЛ",
			                      'page'=>"16",
			                      'link'=>"index.php?show=16"			                      
			                    );
        $submenu_array[]= array ( 'name'=>"МЕЖДУНАРОДНЫЙ ОТДЕЛ",
			                      'short_name'=>"МЕЖДУНАРОДНЫЙ ОТДЕЛ",
			                      'page'=>"19",
			                      'link'=>"index.php?show=19"
			                    );
        $submenu_array[]= array ( 'name'=>"ОФИС-РЕГИСТРАТУРА",
			                      'short_name'=>"ОФИС-РЕГИСТРАТУРА",
			                      'page'=>"20",
			                      'link'=>"index.php?show=20"
			                    );
        $submenu_array[]= array ( 'name'=>"ОТДЕЛ КАЧЕСТВА И АККРЕДИТАЦИИ",
			                      'short_name'=>"ОТДЕЛ КАЧЕСТВА И АККРЕДИТАЦИИ",
			                      'page'=>"21",
			                      'link'=>"index.php?show=21"
			                    );
        $submenu_array[]= array ( 'name'=>"ИНОО",
			                      'short_name'=>"ИНОО",
			                      'page'=>"22",
			                      'link'=>"index.php?show=22"
			                    );
        $submenu_array[]= array ( 'name'=>"ВЫСШАЯ ШКОЛА МАГИСТРАТУРЫ И НАУЧНЫХ ПРОГРАММ",
			                      'short_name'=>"ВЫСШАЯ ШКОЛА МАГИСТРАТУРЫ И НАУЧНЫХ ПРОГРАММ",
			                      'page'=>"23",
			                      'link'=>"index.php?show=23"
			                    );
        $submenu_array[]= array ( 'name'=>"ФАКУЛЬТЕТ ЗАОЧНОГО И ВЕЧЕРНЕГО ОБУЧЕНИЯ",
			                      'short_name'=>"ФАКУЛЬТЕТ ЗАОЧНОГО И ВЕЧЕРНЕГО ОБУЧЕНИЯ",
			                      'page'=>"24",
			                      'link'=>"index.php?show=24"
			                    );
        $submenu_array[]= array ( 'name'=>"ЦЕНТР ФИЗИЧЕСКОЙ КУЛЬТУРЫ И СПОРТА",
			                      'short_name'=>"ЦЕНТР ФИЗИЧЕСКОЙ КУЛЬТУРЫ И СПОРТА",
			                      'page'=>"36",
			                      'link'=>"index.php?show=36"
			                    );
        $submenu_array[]= array ( 'name'=>"КОЛЛЕДЖ ЭКОНОМИКИ И СЕРВИСА",
			                      'short_name'=>"КОЛЛЕДЖ ЭКОНОМИКИ И СЕРВИСА",
			                      'page'=>"37",
			                      'link'=>"index.php?show=37"
			                    );
        $submenu_array[]= array ( 'name'=>"ЛИЦЕЙ",
			                      'short_name'=>"ЛИЦЕЙ",
			                      'page'=>"38",
			                      'link'=>"index.php?show=38"
			                    );
        $submenu_array[]= array ( 'name'=>"ЦЕНТР ИНФОРМАЦИОННЫХ ТЕХНОЛОГИЙ",
			                      'short_name'=>"ЦЕНТР ИНФОРМАЦИОННЫХ ТЕХНОЛОГИЙ",
			                      'page'=>"40",
			                      'link'=>"index.php?show=40"
			                    );
        $submenu_array[]= array ( 'name'=>"ЦЕНТР КАРЬЕРЫ И МАРКЕТИНГА",
			                      'short_name'=>"ЦЕНТР КАРЬЕРЫ И МАРКЕТИНГА",
			                      'page'=>"41",
			                      'link'=>"index.php?show=41"
			                    );
        $submenu_array[]= array ( 'name'=>"ОТДЕЛ КАДРОВ",
			                      'short_name'=>"ОТДЕЛ КАДРОВ",
			                      'page'=>"43",
			                      'link'=>"index.php?show=43"
			                    );
        $submenu_array[]= array ( 'name'=>"ФИНАНСОВО- ЭКОНОМИЧЕСКИЙ ОТДЕЛ И БУХГАЛТЕРИЯ",
			                      'short_name'=>"ФИНАНСОВО- ЭКОНОМИЧЕСКИЙ ОТДЕЛ И БУХГАЛТЕРИЯ",
			                      'page'=>"44",
			                      'link'=>"index.php?show=44"
			                    );
        $submenu_array[]= array ( 'name'=>"ТИПОГРАФИЯ",
			                      'short_name'=>"ТИПОГРАФИЯ",
			                      'page'=>"45",
			                      'link'=>"index.php?show=45"
			                    );
        


        }

if (isset($submenu_array) AND !empty($submenu_array))
{  ?>
   <DIV style="background-color:#17202B; margin:2px auto; width:98%; height:240; padding:10px 10px; text-align:center; float:center;"> 
        
   <?php 
   $i_submenu="0";
  foreach ($submenu_array as $key => $submenu_info) 
	  { $i_submenu++;
        if (1==2 //$i_submenu==5 OR $i_submenu==10 OR $i_submenu==15 OR $i_submenu==20
			)
		  { echo $i_submenu;
		    ?>
			</DIV>
            <DIV style="clear:both; width:200px; padding:5px 2px; float:left;"> 
		   <?php 
		  }
			else {
        ?> 
            <DIV style="height:60px; width:200px; margin:5px auto; padding:5px 10px; float:left; text-align:center;
			outline:0px solid aqua; <?php if ($show==$submenu_info['page']) {echo "background-color:#960C1C; ";} ?>
			">
			<a style="color: #fff;   font-size: 15px; text-decoration: none;" href="<?php echo $submenu_info['link']; ?>">
                <?php echo $submenu_info['short_name']; ?>
            </a></DIV>
       <?php
			  } 
	  } // end foreach
  ?>   
  </DIV>
  <?php
}
?>
        <!-- <ul class="lanit-rea-nav-top"> 
        <li>
            <a href="index.php?show=38">
                Лицей
            </a>
        </li>
    
        <li>
            <a href="index.php?show=37">
                Колледж
            </a>
        </li>
    
        <li>
            <a href="index.php?show=48">
                Кто есть кто
            </a>
        </li>
    
        <li>
            <a href="index.php?show=9">
                Кафедры
            </a>
        </li>
    
        <li>
            <a href="index.php?show=41">
                Карьера
            </a>
        </li>
    
        <li>
            <a href="http://rea.ru/ru/pages/contacts.aspx">
                Контакты
            </a>
        </li>
    
        </ul> 
    
</div>
</div> -->