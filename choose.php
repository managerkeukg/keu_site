<?php
$object_type_edu_institions= new TableQuery;
$object_type_edu_institions->order_by_field="id";
$array_type_edu_institions=$object_type_edu_institions->query ("SELECT * from `keu_type_edu_institutions` WHERE `status`='1' ORDER BY `id` ASC");
if (isset($array_type_edu_institions) AND !empty($array_type_edu_institions))
{
	////echo "<pre>"; print_r($array_type_edu_institions); echo "</pre>";
	$array_select= array ();
	$array_select['settings']['attributes']=
		array('id'=>"type_edu_institions_choose",
			  'name'=>"type_edu_institions_choose",
			  'required'=>'required'
			  );
    $array_select['data']= $array_type_edu_institions;
	$datagrid= new HtmlSelect;
	$datagrid->select_label="<BR>Учебное заведение:<DIV class=\"required\" >*</DIV>";
    $datagrid->option_value="id";
    $datagrid->option_label="name_ru";
    $datagrid->first_option_value="";
    $datagrid->first_option_label="---выбрать---";
	$datagrid->onchange_function="resetSelect('directings_choose'); this.form.submit();   "; // resetSelect('directings_choose');
	$datagrid-> DisplaySelect($array_select);
}
if(isset($_POST['type_edu_institions_choose']) AND !empty($_POST['type_edu_institions_choose']))
{
	$type_edu_institions_choose = mysql_real_escape_string($_POST['type_edu_institions_choose']);
	  
	$object_directings = new TableQuery;
	$object_directings -> order_by_field="id";
	$array_directings = $object_directings->query ("SELECT * from `keu_directions` WHERE `edu_institution` =".$type_edu_institions_choose." AND `status`='1' ORDER BY `name_ru` ASC");
	if (isset($array_directings) AND !empty($array_directings))
	{
		$array_select= array ();
		$array_select['settings']['attributes']=
			array('id'=>"directings_choose",
				  'name'=>"directings_choose");
		$array_select['data']= $array_directings;
		$datagrid= new HtmlSelect;
		$datagrid->select_label="<BR>Направления: <DIV class=\"required\" >*</DIV>";
		$datagrid->option_value="id";
		$datagrid->option_label="name_ru";
		$datagrid->first_option_value="";
		$datagrid->first_option_label="---выбрать---";
		$datagrid->onchange_function="this.form.submit();   ";
		$datagrid-> DisplaySelect($array_select);
	}
}
?>	