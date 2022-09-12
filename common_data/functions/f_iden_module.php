<?php
function get_module_id ($array_modules, $module_name) 
{ $id_module="0";
  if (isset($array_modules) AND !empty($array_modules)) {	  
      foreach ($array_modules as $key => $value) 
	  {
	    if ($value['path']==$module_name)
		{ //module exists 
		  $id_module=$key;
		} else {}
	  }
  } else {}	 
  return $id_module;
}
?>