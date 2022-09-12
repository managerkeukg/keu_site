<style>

</style>
<?php
class SelectHtml5
{ 
	public $id="id_select";
	public $name="select_name";
	
	public $autofocus;
	public $disabled;
	public $form;
	public $multiple;
	public $required;
	public $size;
	private $return_text;
	
	public $option_default="Выбрать";
	public $selected_value;
	private $text_onchange;
	
	public $array_options=array();
	
	public function onchange ($text)
	{
		$this->text_onchange=$text;
	}
	
	public function display ()
	{
		$this->return_text=$this->return_text."<SELECT id=\"".$this->id."\"  name=\"".$this->name."\" ";
			if(isset($this->autofocus) AND !empty($this->autofocus)) {$this->return_text=$this->return_text. " autofocus ";}
			if(isset($this->disabled) AND !empty($this->disabled)) {$this->return_text=$this->return_text." disabled ";}
			if(isset($this->form) AND !empty($this->form)) {$this->return_text=$this->return_text. " form ";}
			if(isset($this->multiple) AND !empty($this->multiple)) {$this->return_text=$this->return_text. " multiple ";}
			if(isset($this->required) AND !empty($this->required)) {$this->return_text=$this->return_text. " required ";}
			if(isset($this->size) AND !empty($this->size)) {$this->return_text=$this->return_text. " size ";}
			
			if(isset($this->text_onchange) AND !empty($this->text_onchange)) {$this->return_text=$this->return_text. " onchange='".$this->text_onchange."' ";}
		$this->return_text=$this->return_text.">";
		if(isset($this->array_options) AND !empty($this->array_options))
		{
			$this->return_text=$this->return_text. "<option value=\"\"> ".$this->option_default." </option>";
			foreach ($this->array_options as $key => $value)
			{
				$this->return_text=$this->return_text. "<option value=\"".$key."\"";
				if (isset($_POST[$this->name]) AND !empty($_POST[$this->name]))
				{
					if($_POST[$this->name] == $key)   { $this->return_text=$this->return_text. " selected ";}  else {  }
				}
				if (!empty($this->selected_value) AND ($key == $this->selected_value))
				{
					$this->return_text=$this->return_text. " selected ";
				}
				$this->return_text=$this->return_text. ">".$value."</option>";
			}
		}
		
		$this->return_text=$this->return_text. "</SELECT>";
		return $this->return_text;
	}
}
?>