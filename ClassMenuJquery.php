<?php
class MenuJquery
{ // actions
	public $prefix="menu";
    public $div_id="menu_id";
    public $div_style="clear:both; padding:10px 0px;";
    public $items_prefix="menu_item";
    public $item_onClickFunction = array ("sub_item", "sub_block_container");
    public $itemClass="menu_item_class";
    public $itemClassData="float:left;   background-color:#023183; border-right:2px solid white; color:white; padding:10px 10px; text-align: center; ";
    public $itemClassDataCurrent="float:left;   background-color:green; border-right:2px solid white; color:white; padding:10px 10px; text-align: center; ";
    public $display_type="";
    public $deepness="0";
    
	private $make_current_function = "MakeCurrent";
	private $showSubBlock_function = "showSubBlock";
	private $showSubBlock_text = "showSubBlockText";
	private $clear_BlockContainer = "clear_BlockContainer";
	private $current_item_id = "current_item_id";
	public function display ($array, $array_details="") 
	{
		//if (isset($array_details['prefix']) AND !empty($array_details['prefix'])) {} 
		if (isset($array_details['prefix']) AND !empty($array_details['prefix'])) { $this->prefix = $array_details['prefix']; } 
		$this->current_item_id = $this->prefix."_".$this->current_item_id;

		$this->div_id=$this->prefix."_id";
		if (isset($array_details['div_id']) AND !empty($array_details['div_id'])) { $this->div_id = $array_details['div_id']; } 
		
		if (isset($array_details['div_style']) AND !empty($array_details['div_style'])) { $this->div_style = $array_details['div_style']; } 
		
		$this->items_prefix=$this->prefix."_item";
		if (isset($array_details['items_prefix']) AND !empty($array_details['items_prefix'])) { $this->items_prefix = $array_details['items_prefix']; } 
		
		$this->itemClass=$this->prefix."_item_class";
		if (isset($array_details['itemClass']) AND !empty($array_details['itemClass'])) { $this->itemClass = $array_details['itemClass']; } 
		
		$this->make_current_function=$this->prefix."_".$this->make_current_function;
        $this->showSubBlock_function=$this->prefix."_".$this->showSubBlock_function;
        $this->showSubBlock_text=$this->prefix."_".$this->showSubBlock_text;
        $this->clear_BlockContainer=$this->prefix."_".$this->clear_BlockContainer;
        
		//$this->item_onClickFunction=$array_details['item_onClickFunction'];


		if (isset($array_details['itemClassData']) AND !empty($array_details['itemClassData'])) { $this->itemClassData = $array_details['itemClassData']; } 
		
		if (isset($array_details['itemClassDataCurrent']) AND !empty($array_details['itemClassDataCurrent'])) { $this->itemClassDataCurrent = $array_details['itemClassDataCurrent']; }
        
		if (isset($array_details['display']) AND !empty($array_details['display'])) { $this->display_type = " display:".$array_details['display']."; "; }
        
		echo "

<SCRIPT type=\"text/javascript\">";
		    echo "
	var ".$this->current_item_id."=".key($array)."; ";
			echo "
	function ".$this->make_current_function." (ItemPrefix, ItemId, ItemClass) {  ";
			///echo " alert("."'was' + ".$this->current_item_id."); ";
			echo "
	$(\"#\"+ItemPrefix+\"_\"+".$this->current_item_id." ).removeClass(ItemClass + \"_current\"); ";
		    echo "
	$(\"#\"+ItemPrefix+\"_\"+".$this->current_item_id." ).addClass(ItemClass); ";
		    echo "
	$(\"#\"+ItemPrefix+\"_\"+ItemId).addClass(ItemClass + \"_current\");  ";
		    echo "
	".$this->current_item_id." = ItemId; ";
	        /// echo " alert("."'become' + ".$this->current_item_id."); ";
			echo "
	}";
            
        
			echo "

	function ".$this->showSubBlock_function." (Id) { ";	
	        echo "
		var str = $( \"#".$this->prefix."_content_item_\"+Id ).html();
		var str_div_first= '<DIV style=\"clear:both; text-align:center; margin:10px auto; padding:10px 0px;\">';
        var str_div_last= '</DIV>';
        $(\"#".$this->prefix."_Block_Container\").html( str_div_first + str + str_div_last);  ";
	        echo "
        }";

			echo "

	function ".$this->clear_BlockContainer." (Id) { ";	
	        echo "
		$(\"#".$this->prefix."_Block_Container\").html('');  ";
	        echo "
        }";


			echo "

	function ".$this->showSubBlock_text." (Text) { ";	
	        echo "
        var STR = Text.replace('@', '\"');
        var str_div_first= '<DIV style=\"clear:both; text-align:center; margin:10px auto; padding:10px 0px;\">';
        var str_div_last= '</DIV>';
		$(\"#".$this->prefix."_Block_Container\").html(str_div_first + Text + str_div_last );  ";
	        echo "
        }";

		echo "
</SCRIPT>
";
		?>
<STYLE>
<?php echo ".".$this->itemClass ?> {
<?php echo "   ".$this->itemClassData;	?>

}

<?php echo ".".$this->itemClass."_current" ?> {
<?php echo "   ".$this->itemClassDataCurrent;	?>

}
</STYLE>
<?php	// --- begin show divs	
		echo "
<DIV id=\"".$this->div_id."\" style=\"".$this->div_style." ".$this->display_type."\"   >";
		$i=0;
		foreach ($array as $key => $value)
		{   $i++; if ($i==1) {$current_class_end="_current";} else {$current_class_end="";}
echo "
	<DIV id=\"".$this->items_prefix."_".$key."\" class=\"".$this->itemClass.$current_class_end."\" 
   onClick=\"
   ".$this->make_current_function." ('".$this->items_prefix."', '".$key."', '".$this->itemClass."'); ";

	if(isset($value['data']) AND !empty($value['data'])) {
		echo "
		".$this->showSubBlock_function."('".$key."'); "; 
    } elseif (isset($value['text']) AND !empty($value['text'])) {
		//echo "alert('no sub');";
		echo "
		".$this->clear_BlockContainer."('".$this->prefix."_Block_Container"."'); "; 
		echo "
		".$this->showSubBlock_text."('".$value['text']."'); "; 
    } else {
		echo "
		".$this->clear_BlockContainer."('".$this->prefix."_Block_Container"."'); "; 
		echo "
		".$this->showSubBlock_text."('Нет данных'); "; 
	}
   echo "\">";  
if (isset($value['label']) AND !empty($value['label'])) {echo $value['label'];} else {}
echo "</DIV>";
		} // end foreach
		echo "
</DIV>";
  // --- end show divs
 

  		echo "

<DIV id=\"".$this->prefix."_Block_Container\" >
</DIV>
		";

  // --- begin sub divs
        $this->deepness++;
		foreach ($array as $key => $value)
		{   //style=\"display:none;\"
			echo "
<!-- begin sub divs -->
<DIV id=\"".$this->prefix."_content_item_".$key."\"  style=\"clear:both; display:none;\" > ";
////echo "content  ".$this->prefix."_".$key.",  ";

           
		   if(isset($value['data']) AND !empty($value['data'])) {
	////echo $this->prefix." ".$key."  has sub menu";
			   ///*
			   $new_data=""; $array_details2= array();
			   $array_details2['prefix']= "sub_menu_deep".$this->deepness."_key_parent".$key;
			   $new_data= new MenuJquery;
			   $new_data->deepness = $this->deepness;
               $new_data-> display ($value['data'], $array_details2);
			 
			    //*/
			     }
echo "
</DIV>
<!-- end sub divs -->
";
		} // end foreach
		
		
	} //end function display

} // end class
?>