<STYLE>
.pagination_td {
   text-align:center;
   width:30px;
   background-color: black;
   border:1px solid white;
}
.pagination_table {
   margin:0px auto;
}
</STYLE>
<?php
class Pagination
{
	public function pagination_view($current_page, $total_page, $total_records, $url)
   { //echo $current_page."-".$total_page."-".$total_records;
    $font_size_current="3"; $font_size="2"; $count_per_row="20";
	echo "<TABLE  class=\"pagination_table\"  cellpadding=\"3px\" cellspacing=\"2px\"><TR>";
	//$number_row=0;
    for($i = 1; $i <= $total_page; $i++)
    {
      $number_row = (int)($i/$count_per_row);  if((float)($i/$count_per_row) - $number_row != 0) {$row_end="";} else {$row_end="</TR><TR>";}
	  if($i != $total_page) // if the page is not last
      {
        if($current_page == $i) // if current page
        {
          echo "<TD class=\"pagination_td\"><a style=\"padding:3px 3px; color: rgb(255, 255, 255); background-color: white;\">
		  <font color=black size=$font_size_current>".$i."</font></a></TD>".$row_end;
        }
        else
        { 
		   echo "<TD class=\"pagination_td\"><a href=".$url."=".$i." 
		  style=\"padding:0px 0px; color: rgb(255, 255, 255); background-color: black;\">
		  <font color=white size=$font_size>".$i."</font>
		  </a></TD>".$row_end;
        }
      }
      else // if the page is last
      {
        if($current_page == $i)
        {
          echo "<TD class=\"pagination_td\"><a style=\"padding:3px 3px; color: rgb(255, 255, 255); background-color: white;\">
		  <font color=black size=$font_size_current>".$i."</font></TD>".$row_end;
        }
        else
        {  
          echo "<TD class=\"pagination_td\"><a href=".$url."=".$i."
		  style=\"padding:0px 0px; color: rgb(255, 255, 255); background-color: black;\">
		  <font color=white size=$font_size>".$i."</font>
		  </a></TD>".$row_end;
        }
      }
    }

	  echo "</TR></TABLE>"; 
   } // end of function
}
?>