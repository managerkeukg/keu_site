﻿<?php
class TableHtml5
{ 
	public $caption;
	public $array_th = array();
	public $array_column_values = array();
	public $array_foreign = array();
	public $array_data = array();
	public $array_columns = array();
	public $array_columns_added = array();
	public $css_file="css/html_table_default.css";
	
	public function set_data ($data)
	{
		$this -> array_data = $data;
		$this -> get_columns ($data);
	}
	
	public function get_columns ($data)
	{
		$this -> array_columns = array_keys(array_shift(array_values($data)));
		$array_columns_buffer=array();
		foreach ($this -> array_columns as $key => $value)
		{
			$array_columns_buffer[$value]=$value;
		}
		$this -> array_columns = $array_columns_buffer;
		////echo "<pre> columns "; print_r($this->array_columns); echo "</pre>";
	}
	
	public function set_th_array ($array_th)
	{
		$this->array_th=$array_th;
	}
	
	public function header_add ($th_name, $caption)
	{
		if (isset($this -> array_th) AND !empty($this -> array_th) AND is_array($this -> array_th))
		{	
			$this -> array_th [$th_name] = $caption;
			////echo "<pre> New Headers  "; print_r($this->array_th); echo "</pre>";
		}
	}
	
	public function data_key_add ($key_name)
	{
		if (isset($this -> array_data) AND !empty($this -> array_data) AND is_array($this -> array_data))
		{	
			$array_data_buffer=array();
			foreach ($this -> array_data as $key => $value) {
				$value[$key_name]="";
				$array_data_buffer[$key]=$value;
			}
			$this -> array_data=$array_data_buffer;
			unset ($array_data_buffer);
			$this -> get_columns ($this -> array_data);
		}
	}
	
	public function data_key_value ($key_name, $string)
	{
		if (isset($this -> array_data) AND !empty($this -> array_data) AND is_array($this -> array_data))
		{	
			$array_data_buffer=array();
			foreach ($this -> array_data as $key_buffer => $value_buffer) {
				$new_string = $this -> replace_qoutes ($value_buffer, $string);
				$value_buffer[$key_name]=$new_string;
				$array_data_buffer[$key_buffer]=$value_buffer;
			}
			$this -> array_data=$array_data_buffer;
			unset ($array_data_buffer);
		}
	}
	
	public function data_key_delete ($key_name)
	{
		if (isset($this -> array_data) AND !empty($this -> array_data) AND is_array($this -> array_data))
		{	
			$array_data_buffer=array();
			foreach ($this -> array_data as $key => $value) {
				unset($value[$key_name]);
				$array_data_buffer[$key]=$value;
			}
			$this -> array_data=$array_data_buffer;
			unset ($array_data_buffer);
			$this -> get_columns ($this -> array_data);
		}
	}
	
	public function data_key_code_status ($key_name, $code_file_path, $param, $show_hide_link)
	{
		if (isset($this -> array_data) AND !empty($this -> array_data) AND is_array($this -> array_data))
		{	
			$array_data_buffer=array();
			foreach ($this -> array_data as $key_buffer => $value_buffer) {
				////echo "<pre> "; print_r($value_buffer); echo "</pre>";
				$text=require $code_file_path;
				$value_buffer[$key_name]= $text;
				$array_data_buffer[$key_buffer]=$value_buffer;
			}
			$this -> array_data=$array_data_buffer;
			unset ($array_data_buffer);
		}
	}
	
	public function column_value ($column_name, $string)
	{
		//echo "<br>".$string;
		/*
		preg_match_all("/{{(.*?)}}/", $string, $out);
		///
		echo "<pre>variables "; print_r($out[1]); echo "</pre>";
		foreach ($out[1] as $variable)
		{ 	
			$variable=trim($variable);
			$variables[$variable]=$variable;
		}
		///
		echo "<pre> Variables "; print_r($variables); echo "</pre>";
		foreach ($out[1] as $variable)
		{ 	
			//$variable=trim($variable);
			$new1_string=str_replace('{{'.$variable.'}}', $array[$variables[$variable]], $new_string);
			$new_string=$new1_string;
		}
		///
		echo "<pre> edf "; print_r($new_string); echo "</pre>";
		*/
		$this->array_column_values[$column_name]=$string;
	}
	
	public function column_add ($column_name, $caption)
	{
		$this -> array_columns[$column_name] = $column_name ;
		$this -> array_th[$column_name] = $caption ;
		////echo "<pre> Columns "; print_r($this->array_columns); echo "</pre>";
		$this->array_columns_added[$column_name] = $caption;
		////echo "<pre> Added Columns "; print_r($this->array_columns_added); echo "</pre>";
		
	}
	
	public function column_delete ($column_name)
	{
		unset ($this -> array_columns[$column_name]);
	}
	
	public function column_value_array_foreign ($column_name, $array, $array_fields_to_show)
	{
		$this->array_foreign[$column_name]['array']=$array;
		$this->array_foreign[$column_name]['fields']=$array_fields_to_show;
		////echo "<pre>"; print_r($this->array_foreign); echo "</pre>";
	}
	
	public function display ()
	{
		if (isset($this->array_data) AND !empty($this->array_data) AND is_array($this->array_data))
		{
			include $this->css_file;
			////echo "<pre> Data "; print_r($this->array_data); echo "</pre>";
			////echo "<pre> columns "; print_r($this->array_columns); echo "</pre>";
			echo "<div style=\"overflow-x:auto;\">";
			echo "<table id=\"id_TableHtml\" class=\"TableHtml\" >";  // \"cellpadding=\"3px\" cellspacing=\"0px\"
			if (isset($this->caption) AND !empty($this->caption)) {echo "<caption>".$this->caption."</caption>";} 
			echo "<thead>";
			if(isset($this->array_th) AND is_array($this->array_th)) { 
				////echo "<pre>"; print_r($this->array_th); echo "</pre>";
				echo "<tr>";
				foreach ($this->array_th as $key => $value)
				{
					if (isset($this -> array_columns[$key]) AND !empty($this -> array_columns[$key]))
					{
						echo "<th>"; echo $value; echo "</th>";
					}
				}
				echo "</tr>";
			} else {}
			echo "</thead>";
			echo "<tbody>";
			$i="0";  
			////echo "<pre>Array columns before viewing "; print_r($this->array_columns); echo "</pre>";
				
			foreach ($this->array_data as $key => $value)
			{
				//$i++; if($i % 2 == 0) {  $bgcolor="silver"; }  else { $bgcolor="white"; }
				//echo "<TR bgcolor=\"".$bgcolor."\" align=\"center\">";
				echo "<tr>";
				//echo "<TD>".$i."</TD>";
				foreach ($value as $key1 => $value1)
				{
					if (isset($this -> array_columns[$key1]) AND !empty($this -> array_columns[$key1]))
					{
						if (isset($this->array_foreign[$key1]['array']))
						{
							//echo "<td>".$this->array_foreign[$key1]['array']."</td>";
							echo "<td>".$this->array_foreign[$key1]['array'][$value1][$this->array_foreign[$key1]['fields']['0']]."</td>";
							////echo "<td>".$this->array_foreign[$key1]['fields']['0']."</td>";
						}
						elseif (isset($this->array_column_values[$key1]))
						{
							echo "<td>".$this->array_column_values[$key1]."</td>";
						}
						else 
						{
							echo "<td>".$value1."</td>";
						}
					}
				}
				if (isset($this -> array_columns_added) AND !empty($this -> array_columns_added))
					{
						foreach ($this -> array_columns_added as $key => $value) {
							//echo "<td></td>"; //echo "<td>".$value1."</td>";
							if (isset($this->array_column_values[$key]))
							{
								echo "<td>".$this->array_column_values[$key]."</td>";
							}
							else 
							{
								echo "<td></td>";
							}
						}
						
					}
				echo "</tr>";
			}
			echo "</tbody>";
			echo "</table></div>";
		}
	}
	
	public function replace_qoutes ($array, $string)
	{
		////echo "<pre> "; print_r($array); echo "</pre>";
		
		///*
		preg_match_all("/{{(.*?)}}/", $string, $out);
		///echo "<pre>variables "; print_r($out[1]); echo "</pre>";
		foreach ($out[1] as $variable)
		{ 	
			$variable=trim($variable);
			$variables[$variable]=$variable;
			if (isset($array[$variable]))
			{
				$string = str_replace('{{'.$variable.'}}', $array[$variable], $string);
			}
			else {
				
			}
		}
		////echo "<pre> Variables "; print_r($variables); echo "</pre>";
		$string_replaced = $string;
		return $string_replaced;
		
	}
}
?>