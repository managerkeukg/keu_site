<?php
require_once "../settings.php";
require_once _DATA_PATH_."top.php";

check_module_user_permission(array ("modules" =>$MODULES_ARRAY, "user_permissions" => $USER_PERMISSIONS_ARRAY), "umo");
$admin_id_module=get_module_id ($MODULES_ARRAY, "umo");

require_once _DATA_PATH_."functions/f_is_int.php";
is_int_obligatory ($_GET['id']);
is_int_obligatory ($_GET['id_file']);

$id=$_GET['id'];
$id_file=$_GET['id_file'];

$datagrid-> user_module_permissions =$USER_PERMISSIONS_ARRAY[$admin_id_module];
// Обработчик 
  if(!empty($_FILES))
  { 
	$filename= $_FILES['filename']['name'];
    $ext= pathinfo($filename, PATHINFO_EXTENSION);
	if($ext == 'pdf' || $ext == 'PDF' || $ext=='djvu' || $ext=='DJVU' || $ext=='doc'  || $ext=='DOC'  || $ext=='docx'  || $ext=='DOCX'  ||  $ext=='ppt' ||  $ext=='PPT' || $ext=='pptx' || $ext=='PPTX' || $ext=='rtf' || $ext=='RTF' 
		|| $ext=='txt' || $ext=='TXT' || $ext=='xls' || $ext=='XLS'  || $ext=='xlsx' || $ext=='XLSX')
    { 
	  if (isset($_POST['filename'])) { echo $_POST['filename'];}
	  $content = file_get_contents($_FILES['filename']['tmp_name']);  
      unlink($_FILES['filename']['tmp_name']);
	  
      echo "Название файла:    ".$filename;
	  
	  if (file_put_contents("../../files/umo/temp/".$id_file.".".$ext, $content)) 
		  {echo "<br>Файл успешно закачен"; } 
	  else {echo "Невозможно сохранить файл";}
      $query="update `keu_umo_files` SET 
				   `path`='http://www.keu.kg/files/umo/".$id_file.".".$ext."',
				   `ext`='".$ext."'
				   WHERE `id`='".$id_file."'";
     if(mysql_query($query)) 
           { 
	          $temp_file="../../files/umo/temp/".$id_file.".".$ext;
	          $new_file="../../files/umo/".$id_file.'.'.$ext;
	          if (copy($temp_file,$new_file)) 
				 {
				   echo "<HTML><HEAD>
                   <META HTTP-EQUIV='Refresh' CONTENT='0; URL=article_files.php?id=".$id."'>
                   </HEAD></HTML>";
				 } else {echo "Невозможно сохранить файл.";}
		   } 
	  else exit("Ошибка при добавлении данных - ".mysql_error()); //.mysql_error() 
      unlink($temp_file);

    }  else {echo "<h3>Выберите Файл или Недопустимый формат файла   </h3>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$filename;}
   } 


?>

<br><br><a href="index.php">Вернуться назад к списку</a><br><br>
<br><br>

<FORM enctype='multipart/form-data' method="POST" action="">
	<input type="file" name="filename" ></input><br><br>
	<input type="submit" value="Прикрепить файл"></input>
</FORM>

Допустимые форматы файлов<br>
<table bgcolor="aqua">
	<tr><td>.pdf</td><td>Adobe PDF</td></tr>
	<tr><td>.djvu</td><td></td></tr>
	<tr><td>.doc</td><td>Microsoft Word 2003</td></tr>
	<tr><td>.docx</td><td>Microsoft Word 2007-2010</td></tr>
	<tr><td>.ppt</td><td>Microsoft PowerPoint 2003</td></tr>
	 <tr><td>.pptx</td><td>Microsoft PowerPoint 2007-2010</td></tr>
	<tr><td>.rtf</td><td>Microsoft Word RTF</td></tr>
	<tr><td>.txt</td><td>Блокнот</td></tr>
	<tr><td>.xls</td><td>Microsoft Excel 2003</td></tr>
	<tr><td>.xlsx</td><td>Microsoft Excel 2007-2010</td></tr> 
	<tr><td></td><td></td></tr>
	<tr><td></td><td></td></tr>
	<tr><td></td><td></td></tr>
	<tr><td></td><td></td></tr>
</table>


<?php
require_once _DATA_PATH_."bottom.php";
?>