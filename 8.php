<?php
require_once "common_data/config.php";
require_once "common_data/functions/f_is_int.php";
require_once "common_data/functions/f_subotdel_info.php";
require_once "common_data/functions/get_array.php";
if (isset($_GET['id'])) {is_int_obligatory ($_GET['id']);} else { exit("Недопустимый формат URL-запроса. Хакерство преследуется законом"); }
$id=$_GET['id'];

//include "menu_subotdels.php";
$subotdel_info=subotdel_info($id, "keu_subotdels");
if (isset($subotdel_info) AND !empty($subotdel_info))
{ ///echo "<pre>"; print_r($subotdel_info); echo "</pre>"; exit;
  ?>
 <DIV id="subotdel_page" >
 <?php
    ////include "content/subotdels/ru/".$id.".php";
	echo "<DIV  class=\"headers\">".$subotdel_info[$lang_current]."</DIV>";
	?>
	<DIV style="width:75%; float:left; padding-left:20px; padding-right:20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    <?php    echo $subotdel_info['text_'.$lang_current]; 	?>
    </DIV>
	<DIV style="float:left; width:15%;  padding-left:30px;">
	  <?php	  
	     $contacts_array=get_array("keu_members", "WHERE `parent_subotdel`=$id AND `status`='1'");
         //echo "<pre>"; print_r($contacts_array); echo "</pre>"; exit;
		 if (isset($contacts_array) AND !empty($contacts_array)) {
         $contacts_name= array ("ru" => "Контакты", "kg" => "Контакттар", "eng" => "Contacts", );
		 ?>
		 <div style="font-size:7pt; margin:0px auto;">
         <h3><?php echo $contacts_name[$lang_current]; ?></h3>
		     <?php 
			    foreach ($contacts_array as $key=> $value) {
			      ?>  <hr>
					  <IMG src="img/contacts/<?php echo $value['photo']; ?>" width="76" height="94"></IMG>
					  <p><strong><?php echo $value['name_'.$lang_current]." ".$value['surname_'.$lang_current]; ?></strong></p>
					  <p><?php echo $value['duty_'.$lang_current]; ?></p>
					  <p><?php echo $value['address_'.$lang_current]; ?></p>
					  <p><?php echo $value['phone1']; ?></p>
					  <p><?php echo $value['phone2']; ?></p>
					  <p><?php echo $value['email']; ?></p>
                  <?php
		        }
			 ?>
         </DIV>
		 <?php
		 }
         //include  "content_right.php"; ?>
	</DIV>
  </DIV> <!-- end subotdel_page -->
	   <?php
	
}
?>
<STYLE>
#subotdel_page img {
   border: 3px solid #85A0C9; 
   border-radius: 30px; 
   -webkit-border-radius: 30px; 
   -moz-border-radius: 30px;
}

.img_round_30 {
   width: 180px; 
   height: 245px; 
   border: 3px solid #85A0C9; 
   border-radius: 30px; 
   -webkit-border-radius: 30px; 
   -moz-border-radius: 30px;
}

.img_round_160 {
   width: 180px; 
   height: 245px; 
   border: 5px solid #CCA5D1; 
   border-radius: 160px 160px 160px 160px;
   - webkit-border-radius: 160px 160px 160px 160px;
   -moz-border-radius: 160px 160px 160px 160px;
}
</STYLE>

			