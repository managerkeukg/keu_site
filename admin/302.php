<?php
	if (isset($_POST) AND !empty($_POST))
{
	require_once "common_data/config.php";
	////echo "<pre>"; print_r($_POST); echo "</pre>";
	
	$error_text="";
	$profile=mysql_real_escape_string($_POST['profile']);
    
	$name=mysql_real_escape_string($_POST['name']);
		//if (strlen($_POST['name'])<3) { $error_text=$error_text."<BR><BR>Поле 'имя' должно быть более 3 символов";}
    
	$surname=mysql_real_escape_string($_POST['surname']);
		//if (strlen($_POST['surname'])<3) { $error_text=$error_text."<BR><BR>Поле 'Фамилия' должно быть более 3 символов";}
    
	$patronymic=mysql_real_escape_string($_POST['patronymic']);
    	//if (strlen($_POST['patronymic'])<3) { $error_text=$error_text."<BR><BR>Поле 'Отчество' должно быть более 3 символов";}
    
	$birthdate=mysql_real_escape_string($_POST['birthdate']);
    	//if (strlen($_POST['birthdate'])<3) { $error_text=$error_text."<BR><BR>Поле 'Дата рождения' должно быть более 3 символов";}
    
	$sex=mysql_real_escape_string($_POST['sex']);
    
	$level=mysql_real_escape_string($_POST['level']);
    	//if (strlen($_POST['level'])<3) { $error_text=$error_text."<BR><BR>Поле 'Текущий класс обучения' должно быть более 3 символов";}
    
	$graduate_from=mysql_real_escape_string($_POST['graduate_from']);
    	if (strlen($_POST['graduate_from'])<3) { $error_text=$error_text."<BR><BR>Поле 'Место окончания средней школы' должно быть более 3 символов";}
    
	$graduate_year=mysql_real_escape_string($_POST['graduate_year']);
		//if (strlen($_POST['graduate_year'])<3) { $error_text=$error_text."<BR><BR>Поле 'Год окончания средней школы' должно быть более 3 символов";}
    
	$attestate=mysql_real_escape_string($_POST['attestate']);
    	//if (strlen($_POST['attestate'])<5) { $error_text=$error_text."<BR><BR>Поле 'Номер и серия аттестата, диплома или справки' должно быть более 5 символов";}
    
	$citizenship=mysql_real_escape_string($_POST['citizenship']);
    	//if (strlen($_POST['citizenship'])<3) { $error_text=$error_text."<BR><BR>Поле 'Гражданство' должно быть более 3 символов";}
    
	$passport_data=mysql_real_escape_string($_POST['passport_data']);
    	//if (strlen($_POST['passport_data'])<10) { $error_text=$error_text."<BR><BR>Поле 'Паспортные данные' должно быть более 10 символов";}
    
	$mobile=mysql_real_escape_string($_POST['mobile']);
    	//if (strlen($_POST['mobile'])<6) { $error_text=$error_text."<BR><BR>Поле 'Контактный телефон' должно быть более 6 символов";}
    
	$teacher=mysql_real_escape_string($_POST['teacher']);
    	//if (strlen($_POST['teacher'])<6) { $error_text=$error_text."<BR><BR>Поле 'ФИО преподавателя' должно быть более 6 символов";}
    
	$email=mysql_real_escape_string($_POST['email']);
		//if (strlen($_POST['email'])<6) { $error_text=$error_text."<BR><BR>Поле 'Почтовый адрес (e-mail)' должно быть более 6 символов";}
    
	if (empty($error_text)) 
	{
    
		$query = "INSERT INTO `keu_online_registration` (id, name, surname, patronymic, birthdate, sex, level, graduate_from, graduate_year, attestate, profile, citizenship, passport_data, mobile, teacher, email, status)
	   		VALUES (NULL,
			  	'".$name."',
			  	'".$surname."',
			  	'".$patronymic."',
				'".$birthdate."',
				'".$sex."',
				'".$level."',
				'".$graduate_from."',
				'".$graduate_year."',
				'".$attestate."',
				'".$profile."',
				'".$citizenship."',
				'".$passport_data."',
				'".$mobile."',
				'".$teacher."',
				'".$email."',
				".now().",
				'1'
			)";
		if(mysql_query($query)) 
		{ 
			echo "<H1>Спасибо за регистрацию. Регистрация успешно проведена</H1>";  
		} 
		else { 
			echo mysql_error(); 
		} 
	} else { echo $error_text;}
}
?>
