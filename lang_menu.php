<DIV style="width:100%; height:35px; background-color:#17202B;">
    <DIV class="lanit-rea-header-top lanit-rea-header-nav">
       <DIV class="lanit-rea-header-top-wrap">
            <ul class="lanit-rea-header-top-lang  ">   <?php $request_uri=$_SERVER['REQUEST_URI']; $request_uri = str_replace('&', '{', $request_uri); ?>
                <li><a id="kg" href="language.php?lang=kg&url=<?php echo $request_uri; ?>"  <?php if (isset($lang_current) AND ($lang_current=="kg")) {echo "class=\"lanit-rea-header-top-lang-cur\"";} ?>><IMG src="img/flags/kg.gif" class="flags"><!--  Кыр --></IMG></a></li>
                <li><a id="ru" href="language.php?lang=ru&url=<?php echo $request_uri; ?>"  <?php if (isset($lang_current) AND ($lang_current=="ru")) {echo "class=\"lanit-rea-header-top-lang-cur\"";} ?> ><IMG src="img/flags/ru.gif" class="flags"><!--  Рус --></IMG></a></li>
                <li><a id="en" href="language.php?lang=eng&url=<?php echo $request_uri; ?>"  <?php if (isset($lang_current) AND ($lang_current=="eng")) {echo "class=\"lanit-rea-header-top-lang-cur\"";} ?>><IMG src="img/flags/eng.gif" class="flags"><!--  Eng --></IMG></a></li>
            </ul>
		</DIV>
	</DIV>
</DIV>