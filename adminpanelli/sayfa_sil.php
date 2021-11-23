<?php require_once("includes/config.php"); ?>
<?php
if($_GET[sayfa])
{
	mysql_query("delete from sayfalar where id='$_GET[sayfa]'");
	header("location:sayfalar.php");
}

?>