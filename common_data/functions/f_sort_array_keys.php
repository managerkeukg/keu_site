<?php
function sort_array_keys ($array)
{
	$new_array=array_keys($array);
	sort($new_array);
	///echo "<pre>  "; print_r($new_array); echo "</pre>";
    foreach ($new_array as $key=>$value) {
       $sorted_array[]=$array[$value];
   }
   ///echo "<pre> new "; print_r($sorted_array); echo "</pre>";
   return $sorted_array;
}
?>