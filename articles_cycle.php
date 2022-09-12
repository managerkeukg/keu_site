<?php
?>
<DIV style="clear:both;"></DIV>
<!-- <H4>ОБЪЯВЛЕНИЯ</H4> -->
<?php
		 require_once "common_data/classes/ClassTableQuery.php";
		 require_once "common_data/config.php";
		 require_once "common_data/classes/ClassTable.php";

		 $object_ebooks= new TableQuery;
         $object_ebooks->order_by_field="id";
		 $array_ebooks=$object_ebooks->query ("SELECT * from `inoo_ebook_ebooks` WHERE `status`='1' ORDER BY `id` ASC");
		 if (isset($array_ebooks) AND !empty($array_ebooks))
		 {
			  foreach ( $array_ebooks as $key => $value)
			 {
				  $ordered_array_ebooks[$value['edu_type']][$value['course']][$value['semester']][]=$value;
			 }
			 
			  ////echo "<pre>"; print_r ($ordered_array_ebooks); echo "</pre>";
			  //echo "<pre>"; print_r ($array_ebooks); echo "</pre>";

			  foreach ($ordered_array_ebooks as $key_edu_type => $value) {
				foreach ( $value as $key_course => $value2)
				{
					foreach ( $value2 as $key_semester => $value3)
					{
						$text_div="";
						foreach ( $value3 as $key_divs => $value4)
						{
							$text_div=$text_div."<DIV class=course_ebook><DIV class=course_small><A href=index.php?show=41&id=".$value4['id']." target=_blank>".replace_for_js_quotes($value4['name'])."</A><BR>".$value4['authors']."</DIV></DIV>";
							//$array[$key_edu_type]['data'][$key_course]['data'][$key_semester]['text']=$array[$key_edu_type]['data'][$key_course]['data'][$key_semester]['text']."<BR><BR>".relace_for_js_quotes($value4['name']);
							
						}
						$array[$key_edu_type]['data'][$key_course]['data'][$key_semester]['text']=$text_div;
					}		
				}
			 }			
		 }
?>

<STYLE>
	.course_ebook {
		clear:both; border:2px solid gray; height:100px; padding: 10px 10px; margin:10px 0px; text-align:left; 
	}

	.course_small {
		padding-top:20px;
	}
						
</STYLE>