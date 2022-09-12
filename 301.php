<SCRIPT src="js/jquery.min.js"></SCRIPT>
<SCRIPT type="text/javascript">
	function resetSelect (Div) {
		$('#'+Div).prop('selectedIndex',0);
	}
</SCRIPT>
<STYLE>
a {
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

	.required {
		color:red;
	}
</STYLE>
<?php
require_once "common_data/config.php";
require_once "common_data/functions/f_is_int.php";
require_once "common_data/classes/ClassTable.php";
require_once "common_data/classes/ClassTableQuery.php";
require_once "common_data/classes/ClassCombobox.php";

?>  
<script>function validate() {
 // check if input is bigger than 3
 var value = document.getElementById('name').value;
 if (value.length < 3) {
   return false; // keep form from submitting
 }

 // else form is good let it submit, of course you will 
 // probably want to alert the user WHAT went wrong.

 return true;
}</script>

<DIV style="padding:20px 20px; border:1px solid #CED0D9; width:900px; margin:0px auto;">
	<FORM action="" method="POST" >
	<?php
		////
		include "choose.php";
	?>
	</FORM>
	<?php
		if(isset($_POST['directings_choose']) AND !empty($_POST['directings_choose']))
		{
			$directings_choose = mysql_real_escape_string($_POST['directings_choose']);
			//echo $directings_choose;
			$array_directions = $array_directings;
			
			$object_profiles = new TableQuery;
			$object_profiles -> order_by_field = "id";
			$array_profiles=$object_profiles-> query("SELECT * FROM `"._TABLE_PREFIX_."profile"."` where  `direction`=".$directings_choose." AND `status`='1'"); // LIMIT 0, 5
			if (isset($array_profiles) AND !empty($array_profiles))
			{
				//	echo "<pre>"; print_r($array_profiles); echo "</pre>";
			}
	?>
	<FORM action="index.php?show=302" method="POST" >
		<TABLE>
	
			<?php
			if (isset($array_directions) AND !empty($array_directions))
			{
				?>	
				<TR>
					<TD> Профиль <DIV class="required" >*</DIV></TD>
					<TD>
					<?php
					
						//						echo "<pre> Направление "; print_r($array_directions); echo "</pre>";
						echo "<SELECT name=\"profile\" required=\"required\">";
						echo "<OPTION value=\"\"  >  Выбрать </OPTION>";
						//foreach ($array_directions[$directings_choose] as $value){
							foreach ($array_profiles as  $key_profile => $value_profile){
								echo "<OPTION value=\"".$key_profile."\"  >  ".$value_profile['name_ru']."</OPTION>";
							}
						//}
						echo "</SELECT>";
					
									
					?>
					</TD>
				</TR>
				<?php 
			}
				
		?>
		<TR>
			<TD>Имя <DIV class="required" >*</DIV></TD>
			<TD><INPUT type="text" id="name" name="name" value=""  size="50" required="required"></INPUT></TD>
		</TR>
		<TR>
			<TD>Фамилия <DIV class="required" >*</DIV></TD>
			<TD><INPUT type="text" id="surname" name="surname"  value="" size="50" required="required"></INPUT></TD>
		</TR>
		<TR>
			<TD>Отчество <DIV class="required" >*</DIV></TD>
			<TD><INPUT type="text" id="patronymic" name="patronymic"  value=""  size="50" required="required"></INPUT></TD>
		</TR>
		<TR>
			<TD>Дата рождения <DIV class="required" >*</DIV></TD>
			<TD><INPUT type="date" id="birthdate" name="birthdate" required="required"></INPUT></TD>
		</TR>
		<TR>
			<TD>Пол <DIV class="required" >*</DIV></TD>
			<TD>
				<SELECT name="sex" required="required">
				  <OPTION value=""  >--- Выбрать --- </OPTION>
				  <OPTION value="1"  >Мужской</OPTION>
				  <OPTION value="2"  >Женский</OPTION>
				</SELECT>
			</TD>
		</TR>
		<TR>
			<TD>Текущий класс обучения <DIV class="required" >*</DIV></TD>
			<TD>
				<SELECT name="level"  required="required">
					<OPTION value=""  >--- Выбрать --- </OPTION>
					<OPTION value="9"  > 9 класс </OPTION>
					<OPTION value="10"  > 10 класс </OPTION>
					<OPTION value="11"  > 11 класс </OPTION>
				</SELECT>
			</TD>
		</TR>
		<TR>
			<TD>Место окончания средней школы
			<br>(Страна, село/город, № средней школы и.т.д)
			<DIV class="required" >*</DIV>
			</TD>
			<TD><TEXTAREA id="graduate_from" name="graduate_from" rows="5" cols="39"  required="required">  </TEXTAREA>
			</TD>
		</TR>
		<TR>
			<TD>Год окончания средней школы <DIV class="required" >*</DIV></TD>
			<TD>
				<SELECT name="graduate_year"   required="required">
					  
					<OPTION value="1990"  >
					1990</OPTION>
					<OPTION value="1991"  >
					1991</OPTION>
					<OPTION value="1992"  >
					  1992</OPTION>
					<OPTION value="1993"  >
					  1993</OPTION>
					<OPTION value="1994"  >
					  1994</OPTION>
					<OPTION value="1995"  >
					  1995</OPTION>
					<OPTION value="1996"  >
					  1996</OPTION>
					<OPTION value="1997"  >
					  1997</OPTION>
					<OPTION value="1998"  >
					  1998</OPTION>
					<OPTION value="1999"  >
					  1999</OPTION>
					<OPTION value="2000"  >
					  2000</OPTION>
					<OPTION value="2001"  >
					  2001</OPTION>
					<OPTION value="2002"  >
					  2002</OPTION>
					<OPTION value="2003"  >
					  2003</OPTION>
					<OPTION value="2004"  >
					  2004</OPTION>
					<OPTION value="2005"  >
					  2005</OPTION>
					<OPTION value="2006"  >
					  2006</OPTION>
					<OPTION value="2007"  >
					  2007</OPTION>
					<OPTION value="2008"  >
					  2008</OPTION>
					<OPTION value="2009"  >
					  2009</OPTION>
					<OPTION value="2010"  >
					  2010</OPTION>
					<OPTION value="2011"  >
					  2011</OPTION>
					<OPTION value="2012"  >
					  2012</OPTION>
					<OPTION value="2013"  >
					  2013</OPTION>
					<OPTION value="2014"  >
					  2014</OPTION>
					<OPTION value="2015"  >
					  2015</OPTION>
					<OPTION value="2016"  >
					  2016</OPTION>
					<OPTION value="2017"  >
					  2017</OPTION>
					<OPTION value="2018"  >
					  2018</OPTION>
					<OPTION value="2019"  >
					  2019</OPTION>
					<OPTION value="2020"  >
					  2020</OPTION>        
					<OPTION value="2021"  selected >
					  2021</OPTION>        
							</SELECT>
			</TD>
		</TR>
		<TR>
			<TD>Номер  и серия аттестата, диплома или справки и.т.д. <!-- <DIV class="required" >*</DIV> --></TD>
			<TD><INPUT type="text" id="attestate" name="attestate"  value=""  size="50"></INPUT></TD>
		</TR>
		<TR>
			<TD>Гражданство <DIV class="required" >*</DIV></TD>
			<TD>
				<SELECT name="citizenship"   required="required">
					<OPTION value="1"  >Кыргызстан</OPTION>
					<OPTION value="2"  >Казахстан</OPTION>
					<OPTION value="3"  >Россия</OPTION>
					<OPTION value="4"  >Узбекистан</OPTION>
					<OPTION value="5"  >Таджикистан</OPTION>
					<OPTION value="6"  >Другое</OPTION>
				</SELECT>
			</TD>
		</TR>
		<TR>
			<TD>Паспортные данные <!-- <DIV class="required" >*</DIV> --></TD>
			<TD><TEXTAREA id="passport_data" name="passport_data" rows="5" cols="39">  </TEXTAREA>
		</TR>
		<TR>
			<TD>Контактный телефон (Whatsapp, Telegram)<DIV class="required" >*</DIV></TD>
			<TD><INPUT type="text" id="mobile" name="mobile"  value=""  size="50"  required="required"></INPUT></TD>
		</TR>
		<TR>
			<TD>Вы узнали информацию о КЭУ через: (ФИО преподавателя)<DIV class="required" >*</DIV></TD>
			<TD><INPUT type="text" id="teacher" name="teacher"  value=""  size="50"  required="required"></INPUT></TD>
		</TR>
		<TR>
			<TD>Почтовый адрес (e-mail) <!-- <DIV class="required" >*</DIV> --></TD>
			<TD><INPUT type="email" id="email" name="email"  value=""  size="50"></INPUT></TD>
		</TR>
		<TR>
			<TD></TD>
			<TD><INPUT type="submit" name="button" value="Зарегистрироваться" ></INPUT></TD>
		</TR>
		<?php 
			
		?>
	</TABLE> 
	</FORM>
	<?php
		}
	?>
</DIV>
<DIV class="required" style="float:none;" >* - Обязательное поле к заполнению.</DIV>

<?php

?>