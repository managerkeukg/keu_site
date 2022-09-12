<?php
function xml2array($xml_array)
{   
	$array_xml= array();
    foreach($xml_array as $key=>$value){
		$array_xml[$key]=$value;
    }
	return $array_xml;
}

?>