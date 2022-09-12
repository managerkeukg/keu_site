<?php
require_once "common_data/config.php";
require_once "common_data/functions/f_is_int.php";
require_once "common_data/classes/ClassTable.php";
require_once "common_data/classes/ClassTableQuery.php";

if (isset($_GET['id'])) {is_int_obligatory ($_GET['id']);} else { exit("Недопустимый формат URL-запроса. Хакерство преследуется законом"); }
$id=$_GET['id'];
?>
<STYLE>
.div_text {
   padding:10px 10px;
}

</STYLE>
<?php
$object = new TableQuery;
$data_array=$object-> query("SELECT * FROM `keu_umo_articles` where `status`='1' AND `id`=".$id."  ORDER BY `id`");

if (isset($data_array) AND !empty ($data_array)) {

	$object_files = new TableQuery;
	$data_array_files=$object_files-> query("SELECT * FROM `keu_umo_files` where `status`='1' AND `parent`=".$id."  ORDER BY `id`");


	?>
	<DIV class="div_text">
	<?php
	//echo "<pre>"; print_r($data_array); echo "</pre>";
	echo "<H2>УМО ".$data_array[0][$lang_current.'_name']."</H2>";
    echo $data_array[0][$lang_current.'_text'];

     if (isset($data_array_files) AND !empty ($data_array_files)) {
		 //echo "<PRE>"; print_r($data_array_files); echo "</PRE>";
		 foreach ($data_array_files as $value)
		 {
			echo "<BR><BR><A href=".$value['path'].">".$value['name']."</A>";
		 }
	 }
    ?>
	</DIV>
	<?php
}
?>