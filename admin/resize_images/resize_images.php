<?php
require_once "resize_function.php";
//if (resizeimg("150.png", "150.png", "900", "900")) {echo "ok";}

/////if (resizeimg("../../img/news/13.JPG", "../../img/news/13.JPG", "100", "100")) { echo "<BR>ok".$i;} exit;

if (isset($_GET['folder']) AND !empty($_GET['folder']))
{
	$folder=$_GET['folder'];
	if ($folder==1) {$path="../../img/common/"; $width_to="900";   echo $path;}
    if ($folder==2) {$path="../../img/news/"; $width_to="100"; echo $path;}
    if ($folder==3) {$path="../../img/news/slider/"; $width_to="900"; echo $path;}
    if ($folder==4) {$path="../../img/calendar/"; $width_to="100"; echo $path;}
    
}
else { exit("Error No folder selected");}

$files1 = scandir($path);
echo "<BR>Total Files amount in folder ".$count_files=count($files1);
//echo "<pre>";  print_r($files1); echo "</pre>"; exit;
unset($files1[0]);
unset($files1[1]);
unset($files1[$count_files-1]);
///unset($files1[$count_files-2]);
///unset($files1[$count_files-3]); exit;
////echo "<pre>";  print_r($files1); echo "</pre>";
echo "<BR>Total Files amount in folder without php files ".count($files1);

foreach ($files1 as $key=>$value)
{
	//echo "<BR>".$key."  ".$value." ".filesize($value);
	//if (resizeimg($value, $value, "900", "900")) {} else {$error_array[$key]=$value;}
	$exloded="";
	$exloded=explode(".", $value);
	$new_array[$exloded[0]]= $exloded[0].".".$exloded[1];
}
ksort($new_array);
////echo "<pre> Sorted  ";  print_r($new_array); echo "</pre>";
echo "<BR>".count($new_array);

end($new_array);
$last_key =key($new_array);
echo "<br>last key ".$last_key;

if (isset($_GET['id']) AND !empty($_GET['id']))
{
	$start=$_GET['id'];
}
else {$start = $last_key-50;}

$end=$start+50;
for ($i = $start; $i <= $end; $i++) {
	//echo  $i;
	  if (isset($new_array[$i]))
	  {
		if (resizeimg($path.$new_array[$i], $path.$new_array[$i], $width_to, $width_to)) { echo "<BR>ok".$i;} else {$error_array[$i]=$i;}
	  }
	 
	 //echo $files1[$i];
	}
echo "<BR><BR><A href=\"resize_images.php?folder=$folder&id=$end\">resize next 50 images</A>";


echo "<pre> Error array "; 
print_r($error_array);
echo "</pre>";
?>