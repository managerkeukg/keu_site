			              </DIV><!-- center -->
		       </TD>
			   <TD width="17%" valign="top" style="PADDING-LEFT: 20px; PADDING-BOTTOM: 15px; PADDING-TOP: 0px ; PADDING-RIGHT: 3px ">
			       <DIV id="right"  width="100%">
                         <?php
                                  //$right=$_GET['right'];
								  if (!empty($right))
				                    {
				                      include _DATA_PATH_.$right.'.php' ; 
				                    }
                                  else { include _DATA_PATH_."3.php";
								        	} 
				         ?>
			       </DIV><!-- right -->
			   </TD>
             </TR>
			 </TBODY>
		  </TABLE>
          <hr><br>
		  <TABLE align="center" width="100%">
		  <TR ><TD align="center" >

           <div id="footer" align="center"  style="padding-top:25px; padding-bottom:25px; background-color:#1A3867; height:50;" >

		     <font color="white" size="2">Электронный деканат <br>
			 &nbsp;&nbsp;&nbsp;All Rights Reserved. 2013
			 <br>+996 555 13-74-00
			 </font> 
		  </div>
		  </TD></TR>
          </TABLE>
		</DIV id="content">
    </td>
    <!-- <td width=5% bgcolor="#EEEEEE" style="background-image:url(style/bg.png);"></td> -->
	</tr>
    </TBODY>
	</TABLE>  	<?php //include "bottomtable.php";?>	
	</DIV><!-- all -->	
</BODY>
</HTML>