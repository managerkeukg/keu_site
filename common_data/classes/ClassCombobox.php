<?php 
	class HtmlSelect 
{  
   public $option_label; public $option_value; public $first_option_value; public $first_option_label;
   public $onchange_function="this.form.submit(); ";
   public $select_label="Caption";
   
   private $array_foreign= array(); private $foreign_show_field=""; private $field_key_foreign="";
   public function option_label_foreign_key($field, $array_foreign, $foreign_show_field) {
	  $this->field_key_foreign=$field;
      $this->array_foreign=$array_foreign;
      $this->foreign_show_field=$foreign_show_field;
   }
   public function DisplaySelect($array)
   {   if (isset($array) AND !empty($array)) {
       //echo "<pre>"; print_r ($array['data']); echo "</pre>";
       echo $this->select_label;
	   echo "
<DIV id=\"div_".$array['settings']['attributes']['id']."\" >";
       echo "
	<SELECT ";
	        foreach ( $array['settings']['attributes'] as $key => $value ) 
				{
				//if ($array['settings']['attributes']['disabled']=='default') ( echo " disabled ";) else {}
				//echo $value;
				switch ($key) {
					case 'autofocus':
						switch ($value) {
					         case 'default':
							 echo "";
						     break;
							 
							 case 'autofocus':
							 echo " autofocus";
						     break;
						}
						break;
					case 'disabled':
						switch ($value) {
					         case 'default':
							 echo "";
						     break;
							 
							 case 'disabled':
							 echo " disabled";
						     break;
						}
						break;
					case 'multiple':
						switch ($value) {
					         case 'default':
							 echo "";
						     break;
							 
							 case 'multiple':
							 echo " multiple";
						     break;
						}
						break;
                    case 'required':
						switch ($value) {
					         case 'default':
							 echo "";
						     break;
							 
							 case 'required':
							 echo " required";
						     break;
						}
						break;
                    case 'size':
						switch ($value) {
					         case 'default':
							 echo "";
						     break;
							 
							 case $value:
							 echo " size=$value";
						     break;
						}
						break;
                    case 'id':
						echo " ".$key."=\"".$value."\"";
						break;
                    case 'name':
						echo " ".$key."=\"".$value."\"";
						break;
                    
				}
				//echo " ".$key."=\"".$value."\"";
			}
       echo " onchange=\"".$this->onchange_function."\">";
	   if( isset($_POST[$array['settings']['attributes']['name']]) AND  ($_POST[$array['settings']['attributes']['name']]
					== $this->first_option_value))   {$selected = " selected";	}  else {$selected = ""; }
	   echo "
		<OPTION value=\"".$this->first_option_value."\"".$selected.">".$this->first_option_label."</OPTION>";
			foreach ( $array['data'] as $key => $value ) 
				{
				if( isset($_POST[$array['settings']['attributes']['name']]) AND  ($_POST[$array['settings']['attributes']['name']]
					== $value[$this->option_value]))   {$selected = " selected";	}  else {$selected = ""; }
				echo "
		<OPTION value=\"".$value[$this->option_value]."\"".$selected.">";
		if (isset($this->array_foreign) AND !empty($this->array_foreign)) {
			if (isset($this->array_foreign[$value[$this->field_key_foreign]][$this->foreign_show_field])) {echo $this->array_foreign[$value[$this->field_key_foreign]][$this->foreign_show_field];} else {echo "empty value";}
			} 
		else {echo $value[$this->option_label];}
		echo "</OPTION>";
			
			}
	   echo "
	</SELECT>
</DIV>";
       }
   }
   
}
?>