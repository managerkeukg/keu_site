<?php
	if (isset($_POST['url']) AND !empty($_POST['url']))
	{
?>
<frameset rows="*" cols="*">
   <frame src="<?php echo $_POST['url']; ?>" name="topFrame" scrolling="no" noresize>
</frameset>
<?php
	} else {
?>
<form method="post" action="">
	<input type="text" name="url" value="<?php echo $_POST['url']; ?>"></input>
	<input type="submit"></input>
</form>
http://www.keu.kg
http://www.akkr.kg
<?php
	} 
?>