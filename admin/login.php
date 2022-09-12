<?php
header('Content-Type: text/html; charset=utf-8');
if (isset($_COOKIE['id']) AND !empty($_COOKIE['id']))
{
	@header("Location:main/index.php");
}
if (isset($_POST) and !empty($_POST))
{
	require_once "../kel_data_admin/config.php";
	$login=htmlspecialchars(trim($_POST['login']));  $login = mysql_real_escape_string ($login);
	$password=htmlspecialchars(trim($_POST['password']));  $password = mysql_real_escape_string ($password);
	$query = "SELECT * FROM  `keu_admin` WHERE  `login` = '$login' AND (`password`='".$password."') AND `status`=1;";
	$cat=mysql_query($query);
	if($cat) 
	{ 
      	if (mysql_num_rows($cat)> 0)
	    { 
	    	$array = mysql_fetch_array($cat);
			$name=$array['name'];
			setcookie("id",$array['id']);
			setcookie("name",$array['name']);
			setcookie("surname",$array['surname']);
			@header("Location:main/index.php"); // @header("Location:".$_SERVER['HTTP_REFERER']);
		} else { echo "<h3><font color=red>Пароль и Логин пользователя не соответствуют. Или нет прав доступа у данного пользователя. Или недостаточно дискового пространства. </font></h3>";}
	} else {
		//exit("Ошибка при изьятии данных - ".mysql_error()); //.mysql_error() 
        echo "<font color=green size=3><b>Вход только для зарегистрированных пользователей <br>
	        <br> Пожалуйста авторизуйтесь</b></font>";
	}
}
?>
<script>
    document.onkeydown=function(evt){
        var keyCode = evt ? (evt.which ? evt.which : evt.keyCode) : event.keyCode;
        if(keyCode == 13)
        {
            //your function call here
            document.login_form.submit();
        }
    }
</script>
<TABLE>
<TR><TD width="200"></TD>
<TD>
<DIV  width="100%" align="center">
<FORM  name="login_form" action="" method="POST" >
<table  align="center"  border="0" >
<tr><td ><h3>Авторизация</h3>
   <!-- text -->
    </td></tr>
<tr><td > 

   
   
     	<table>
		<tr><td>Логин</td><td>
		<INPUT type="text" name="login" value='<?php if (isset($_POST['login'])) {echo $_POST['login']; } else {}?>'></INPUT></td></tr>
		<tr><td></td><td></td></tr>
		<tr><td>Пароль</td><td>
		<INPUT type="password" name="password" value='<?php if (isset($_POST['login'])) {echo $_POST['password']; } else {}?>'></INPUT></td></tr>
		<tr><td></td><td><INPUT type="button" name="password" value="Войти" onclick="this.form.submit()"></INPUT></td></tr>
		</table>
			
			
			
    </td></tr>
	
<tr><td ></td></tr>

<tr><td></td></tr>
</table>
</form>
</DIV>

</TD>
<TD width="200"></TD></TR></TABLE>
<?php
//echo "<a href=\"javascript:history.back()\">Вернуться назад</a><br><br>";

//echo $_SERVER['PHP_SELF'];   echo $_SERVER['HTTP_REFERER']; 
?>