<?php
require_once "common_data/config.php";
require_once "common_data/functions/get_array.php";

$vacancies_array = get_array("keu_vacancy", "WHERE `status`='1'");

if (isset($vacancies_array) AND !empty($vacancies_array))
{ ///echo "<pre>"; print_r($vacancies_array); echo "</pre>"; exit;
  //echo "<h3></h3>";
	?>	
	<DIV style="padding:10px 20px; width:90%;">	  
		<?php 
			foreach ($vacancies_array as $key => $value) {
			    ?>  <hr>
					  <p><?php echo $value[$lang_current.'_title']; ?></p>
					  <p><?php echo $value[$lang_current.'_text']; ?></p>
                <?php
		        }
			 
		
          ?>
	</DIV>
	   <?php
}
?>