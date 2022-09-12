<?php
require_once "check_language.php";
require_once "settings.php";
header('Content-Type: text/html; charset=utf-8');

require_once "lang_arrays.php";

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

$head_settings = file_get_contents("head.xml");
$head_xml = simplexml_load_string($head_settings);
?>
<HTML xmlns="http://www.w3.org/1999/xhtml">
<HEAD>
	<?php echo "<title>".$head_xml->title."</title>"; 
		  echo "<meta name=\"description\" content=\"".$head_xml->title."\"/>"; 
		  echo "<meta name=\"keywords\" content=\"".$head_xml->title."\"/>"; ?>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> <!-- ; charset=UTF-8 --> 
	<meta name="google-site-verification" content="5VXqLUM4JpjyR4QT4MZc-tr8DzYaPmz5E-8ufV6pcww" />
	<link rel="shortcut icon" href="images/favicon.jpg" type="image/vnd.microsoft.icon" id="favicon">
	<link href='style/main.css' rel='stylesheet'>
	<link href='style/consult.css' rel='stylesheet'>
	<script src="js/google_analytics.js"></script>
</HEAD>
<BODY>
    <DIV id="all">
    <DIV id="wrapper">
	      <DIV id="header">
		        <?php 
				//include "menu.php";
				include "menu2.php";
				include "header.php"; 
				//include "header1.php"; 
				///include "google_analitics.php"; 
				?>
          </DIV><!-- end header -->
          <!-- <DIV style="min-height:20px; background-color:#17202B; width:99%; margin: 0px auto;"></DIV> -->
		  <?php 
		        //include "submenu_prev.php";
		  ?>
		<DIV id="content"> 
		                  <DIV id="center">
						    <?php
							  if (!empty($show))
							  {  			                      
			                    if (file_exists($show.'.php')) {   include $show.'.php' ;} else { include "2.php"; }
				              }
                                else { include "2.php";
								}	
                            ?>
			              </DIV><!-- center -->
          <DIV id="footer">
		    <?php include "footer_test.php"; ?>
		  </DIV>
		</DIV > <!--id="content" -->
    </DIV>	<!-- wrapper -->
	</DIV><!-- all -->
</BODY>
<script>
    window["nanotech42ID"] = "bd44416d-53a4-4c99-a7c2-a0032e36fdad";
    (function() {
        var t = document['cre'+'ateEle'+'ment']('script');
        t.type ='text/javascript';
        t.async = true;
        t.src = 'https://dev.nanotech42.com/widget/static/js/nt42-widget-app.js';
        var c = document['getE'+'lement'+'sByTagN'+'ame']('script')[0];
        if ( c ) c['par'+'e'+'ntNod'+'e']['inse'+'rt'+'Bef'+'or'+'e'](t, c);
        else document['documen'+'tEl'+'ement']['f'+'irs'+'tChil'+'d']['app'+'endC'+'hi'+'l'+'d'](t);
    })();
</script>
</HTML>