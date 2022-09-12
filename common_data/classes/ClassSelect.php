<?php
class HtmlSelect 
{  private $colons="4"; private $number_row; private $i="0";
   public function Display($array)
   {   if (isset($array) AND !empty($array)) {
       //echo "<pre>"; print_r ($array['data']); echo "</pre>";
       echo "<SELECT ";
	         foreach ( $array['settings']['attributes'] as $key => $value )
	         {echo " ".$value." ";}
       echo ">";
	   echo "</SELECT>";
	   
   }
}
?>