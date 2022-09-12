<?php
function module_permissions($module, $user, $perm_array)
{ 
   if (isset($perm_array[$module]['1'])) {return "1";} else {return"0";}
}
?>