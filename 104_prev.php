<?php

?>
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
$array_international['erasmus']['ru']="Программы Эрасмус+";
$array_international['erasmus']['kg']="Эрасмус+ программалары";
$array_international['erasmus']['eng']="Erasmus+ projects";

$array_international['partnership']['ru']="Международное сотрудничество";
$array_international['partnership']['kg']="Эларалык кызматташуу";
$array_international['partnership']['eng']="International partnership";

$array_international['mobility']['ru']="Академическая мобильность";
$array_international['mobility']['kg']="Академикалык мобильдуулук";
$array_international['mobility']['eng']="Academic mobility";

?>
<!-- <DIV>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Академическая мобильность
</DIV>
<UL>
	<LI>Преподавателям
	<LI>Студентам
	<LI>Проекты
	 <UL>
		<LI>Эрасмус
		<LI>Мевлана
	 </UL>
</UL> -->

<DIV style="outline:0px solid green; margin:0px 50px;">
<h2 style="color:black; padding-left:100px;"><?php echo $array_frontpage['International'][$lang_current]['name'];?></h2>
<DIV class="cols">
	            <div class="view view-first">
                    <img src="images/abit/abit01.jpg" />
                    <div class="mask">
                        <h2><?php echo $array_international['partnership'][$lang_current];?></h2>
                        <p><?php echo $array_international['partnership'][$lang_current];?></p>
                        <a href="" class="info">узнать</a>
                    </div>
                </div>  
	<DIV class="cols_text">
         <a href="" class="colored" >
		 <p><?php echo $array_international['partnership'][$lang_current];?></p>
		 </a>
    </DIV>
</DIV>	

<DIV class="cols">
	            <div class="view view-third">
                    <img src="images/abit/abit03.jpg" />
                    <div class="mask">
                        <h2><?php echo $array_international['mobility'][$lang_current];?></h2>
                        <p><?php echo $array_international['mobility'][$lang_current];?></p>
                        <a href="" class="info">узнать</a>
                    </div>
                </div>  
	<DIV class="cols_text">
         <a href="" class="colored" >
		 <p><?php echo $array_international['mobility'][$lang_current];?></p>
		 </a>
    </DIV>
</DIV>	

<DIV class="cols">
               <div class="view view-third">
                    <img src="images/abit/abit05.jpg" />
                    <div class="mask">
                        <h2><?php echo $array_international['erasmus'][$lang_current];?></h2>
                        <p><?php echo $array_international['erasmus'][$lang_current];?></p>
                        <a href="" class="info">узнать</a>
                    </div>
                </div>  
	<DIV class="cols_text">
         <a href="" class="colored" >
		 <p><?php echo $array_international['erasmus'][$lang_current];?></p>
		 </a>
    </DIV>
</DIV>	



</DIV>