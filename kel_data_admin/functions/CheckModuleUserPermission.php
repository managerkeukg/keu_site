<?php
function check_module_user_permission($array, $module_name)
{ 
	if (isset($array) AND !empty($array))
	{  
       ///echo "<pre>Modules "; print_r($array); echo "</pre>"; 
	   $access="0";
	   foreach ($array['modules'] as $key => $value) {
	      if ($value['path']==$module_name)
		  { // module exists, check module permissions
		    if (isset($array['user_permissions'][$key])) { $access="1"; } else {}
		  } else {}
	   }
	}
	if ($access=="1") {}
	else {exit("Access Restricted for you");}	 
}
?>