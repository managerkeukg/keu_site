<?php 
error_reporting(0);
header('Content-Type: text/html; charset=UTF-8');
if (!isset($_COOKIE['id']))
{
	@header("Location:../login.php");
}
if  (!empty($_GET['show'])) 
   { if(!preg_match("|^[\d]+$|", $_GET['show'])) 
     {
     exit("Недопустимый формат URL-запроса");
     } }
if  (!empty($_GET['left'])) 
   { if(!preg_match("|^[\d]+$|", $_GET['left'])) 
     {
     exit("Недопустимый формат URL-запроса");
     } }
if  (!empty($_GET['right'])) 
   { if(!preg_match("|^[\d]+$|", $_GET['right'])) 
     {
     exit("Недопустимый формат URL-запроса");
     } }

if (isset($_GET['show'])) 
{
$show=$_GET['show'];
if(!preg_match("|^[\d]+$|", $_GET['show'])) 
  {
   echo $_GET['show']; //  exit("Недопустимый формат URL-запроса");
  }
} else {$show='';}

if (isset($_GET['left'])) 
{
$left=$_GET['left'];
if(!preg_match("|^[\d]+$|", $_GET['left'])) 
  {
   echo $_GET['left']; //  exit("Недопустимый формат URL-запроса");
  }
} else {$left='';}

if (isset($_GET['right'])) 
{
	$right=$_GET['right'];
if(!preg_match("|^[\d]+$|", $_GET['right'])) 
  {
   echo $_GET['right'];  //   exit("Недопустимый формат URL-запроса");
  }
} else {$right='';
       } 

if (isset($_GET['page_id'])) 
{
$page_id=$_GET['page_id'];
if(!preg_match("|^[\d]+$|", $_GET['page_id'])) 
  {
   //echo $_GET['page_id']; //
   exit("Недопустимый формат URL-запроса");
  }
} else {$page_id='';}




require_once _DATA_PATH_."functions/CheckUserPerm.php";
$user_perm_array= user_permissions(_ID_USER_, _TABLE_PREFIX_._USER_PREFIX_."_access_user_permissions");
//echo "<pre>USER PERMISSIONS"; print_r($user_perm_array); echo "</pre>";
require_once _DATA_PATH_."functions/CheckModulePerm.php";
//echo "<pre>"; print_r($_COOKIE); echo "</pre>";
?>
<HTML xmlns="http://www.w3.org/1999/xhtml">
<HEAD>
<title>КЭУ</title>
<meta name="description" content="КЭУ" />
<!-- <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> --> <!-- charset=iso-utf-8 -->
</HEAD>
<link href='<?php echo _DATA_PATH_."style/main.css"; ?>' rel='stylesheet'>
<link href='<?php echo _DATA_PATH_."style/header.css"; ?>' rel='stylesheet'>
<link href='<?php echo _DATA_PATH_."style/consult.css"; ?>' rel='stylesheet'>
<link rel="stylesheet" href="<?php echo _DATA_PATH_."style/base0000.css"; ?>" media="screen"/>
<link rel="stylesheet" href="<?php echo _DATA_PATH_."style/buttons0.css"; ?>" media="screen"/>
<link href='<?php echo _DATA_PATH_."style/css00000.css"; ?>' rel='stylesheet' type='text/css'>
    
<?php 
$bgcolor="#EDEDED";  // #FFE4B5
echo '<BODY style="background-color:'.$bgcolor.'; ">'; 
?>
    <DIV id="all">
	<TABLE width="90%" align="center">
	<TBODY>
	<tr>
	<!-- <td width="5%" bgcolor="#EEEEEE" style="background-image:url(style/bg.png);"></td> -->
	<td >
	      <DIV id="header">
                <DIV align="center" width="100%">
				     <?php include _DATA_PATH_."header.php"; ?>
     			</DIV>
				<DIV  width="100%" align="center">
				     <?php //include"tigramenu.php"; ?>
					
				</DIV>
				<br><br>
		   </DIV><!-- end header -->
		<DIV id="content">
		<DIV id="center" width="100%" style="min-height:400px">
		<TABLE ><TBODY>
	      <TR> <TD width="17%" valign="top" style="PADDING-LEFT: 3px; PADDING-BOTTOM: 15px; PADDING-TOP: 0px; PADDING-RIGHT: 3px"> 
					  <DIV id="left" width="100%">
                         <?php
						     //$left=$_GET['left'];
                                  if (!empty($left))
				                    {
				                      include _DATA_PATH_.$left.'.php' ; 
				                    }  
									else {

				                          include _DATA_PATH_."1.php";
								        	}
				         ?>
					    </DIV><!-- left -->
               </TD>
               <TD  valign="top" style="PADDING-LEFT: 20px; PADDING-BOTTOM: 15px; PADDING-TOP: 0px" width="64%" style="min-height:400px">