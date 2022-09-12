<H4>Электронные Учебно-Методические Комплексы</H4>

<SCRIPT src="js/jquery.min.js"></SCRIPT>
<?php
function replace_for_js_quotes ($str)
{
	$str=str_replace("\"","<<",$str);
	$str=str_replace("'","<<",$str);
	return $str;
}
$array=array();

require_once "ClassMenuJquery.php"; 
require_once "common_data/classes/ClassTableQuery.php";

$object_regions = new TableQuery;
$object_regions->order_by_field="id";
$array_regions=$object_regions-> query("SELECT * FROM `keu_type_region` where `status`='1'  "); // LIMIT 0, 5
//echo "<pre>"; print_r($array_regions); echo "</pre>";
foreach ($array_regions as $value) {
	$array[$value['id']]['label']=$value['name_ru'];
}
////echo "<pre>"; print_r($array); echo "</pre>";

$object_districts = new TableQuery;
$object_districts->order_by_field="id";
$array_districts=$object_districts-> query("SELECT * FROM `keu_type_district` where `status`='1'  "); // LIMIT 0, 5
//echo "<pre>"; print_r($array_districts); echo "</pre>";
foreach ($array_districts as $value) {
	$array[$value['region']]['data'][$value['id']]['label']=$value['name_ru'];
	$array[$value['region']]['data'][$value['id']]['text']=$value['name_ru']." район";
}
///echo "<pre>"; print_r($array); echo "</pre>";

$object_results = new TableQuery;
$object_results->order_by_field="id";
$array_results=$object_results-> query("SELECT * FROM `keu_konkurs_class` where `status`='1'  "); // LIMIT 0, 5
///echo "<pre>"; print_r($array_results); echo "</pre>";


$menu_combobox= new MenuJquery;
/*
$array[1]['label']="Баткенская область";
$array[1]['data'][1]['label']="Баткенский район";
$array[1]['data'][1]['data'][1]['label']="9 класс";
$array[1]['data'][1]['data'][2]['label']="11 класс";

$array[1]['data'][2]['label']="Кадамжайский район";
$array[1]['data'][2]['data'][3]['label']="9 класс";
$array[1]['data'][2]['data'][4]['label']="11 класс";

$array[1]['data'][3]['label']="Лейлекский район";
$array[1]['data'][3]['data'][5]['label']="9 класс";
$array[1]['data'][3]['data'][6]['label']="11 класс";



$array[2]['label']="Жалал-Абадская область";
$array[2]['data'][1]['label']="Аксыйский";
$array[2]['data'][1]['data'][1]['label']="1 Семестр";
$array[2]['data'][1]['data'][2]['label']="2 Семестр";

$array[2]['data'][2]['label']="Ала-Букинский";
$array[2]['data'][2]['data'][3]['label']="3 Семестр";
$array[2]['data'][2]['data'][4]['label']="4 Семестр";

$array[2]['data'][3]['label']="Базар-Коргонский";
$array[2]['data'][3]['data'][5]['label']="5 Семестр";
$array[2]['data'][3]['data'][6]['label']="6 Семестр";
*/

//include "articles_cycle.php";  

$array_details=array();
$array_details['prefix']= "inoo";

$array2=$array; unset ($array);
$menu_combobox-> display ($array2, $array_details);



?>
