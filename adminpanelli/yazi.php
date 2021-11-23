<?php require_once("includes/config.php"); ?>
<?php  include("includes/functions.php"); ?>
<?php  include("includes/header.php"); ?>

<?php error_reporting(E_ALL ^ E_NOTICE);?>
<br />
<div class="container">
<div class="row">

<div class="col-md-3 enson">

<h3><i class="fas fa-chart-bar"><a href="#">İstatistik</a></i></h3>
<hr />

<?php 
if($_GET[page])
echo "<div class=\"istatistik_alani\">";
$sorgu=mysql_query("SELECT * FROM sayfalar WHERE id='$_GET[page]'");
$bilgi=mysql_fetch_array($sorgu);
{
	mysql_query("UPDATE sayfalar SET hit=hit+1 WHERE id='$_GET[page]'");
	echo "<ul>";
	
	echo "<i class=\"fas fa-bookmark\"><a href=\"#\">{$bilgi[konu_bolumu]}</a></i>";
	echo "<br />";
	echo "<br />";
	echo "<i class=\"far fa-eye\"><a href=\"#\">{$bilgi[hit]}tık </a></i>";
	echo "<br />";
	echo "<br />";
	echo "<i class=\"fas fa-clock\"><a href=\"#\">{$bilgi[tarih]}</a></i>";
	echo "<br />";
	echo "<br />";
	echo "<i class=\"fab fa-facebook\"><a href=\"https://www.facebook.com\">Facebook</a></i>";
	echo "</ul>";
	echo "<br />";
	echo "</div>";
}
?>
</div><!--col-md-3 kapanış-->

<div class="col-md-6">
<br/>
<div id="disicerik">
<div id="icerik">

<?php 

$sorgu=mysql_query("SELECT * FROM sayfalar WHERE id='$_GET[page]'");
$bilgi=mysql_fetch_array($sorgu);
echo "<ul id=\"konu_adi\">";
echo "<li>{$bilgi[isim]}</li>";
echo "<ul>";
echo "<ul id=\"konu_icerik\">";
echo "<li>{$bilgi[icerik]}</li>";
echo "<ul>";

?>
</div><!--icerik kapanış-->
</div><!--disicerik kapanış-->
</div><!--col-md-6 kapanış-->
<div class="col-md-3 enson">
<h3>
<i class="fas fa-spinner"><a href="#">En son konular</a></i>
</h3>
<hr />
<?php
$sorgu=mysql_query("select * from sayfalar order by id desc ,isim LIMIT 0,9");
while($bilgi=mysql_fetch_array($sorgu))
 {
	echo "<i class=\"fas fa-tags\" title=\"konu adı\"><a href=\"yazi.php?page={$bilgi[id]}\">{$bilgi[isim]}</a></i> ";
	echo "<br>";
	
	echo "<i class=\"fas fa-clock\" title=\"konu tarihi\"><a href=\"#\">{$bilgi[tarih]}</a></i> ";
	echo "<br>";
	echo "<br>";
 }
?>
</div>
</div><!--row kapanış-->
</div><!--container kapanış-->
<?php include 'includes/footer.php'; ?>