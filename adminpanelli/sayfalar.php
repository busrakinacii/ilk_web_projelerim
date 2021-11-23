<?php require_once("includes/config.php"); 
if(!isset($_SESSION['uname']))
{
	header("location:login.php");
}
?>
<?php  include("includes/header.php"); ?>

<div class="yonetim_menu">
<ul>
<li><a href="yeni_sayfa.php">Yeni Sayfa Oluştur</a></li>
<li><a href="msayfalar.php">Mevcut Konu Sayfaları</a></li>
<li><a href="sayfa_guncelle.php">Sayfa Güncelleme</a></li>
<li><a href="sayfalar.php">Sayfa Silme</a></li>
<li><a href="logout.php">Çıkış</a></li>
</ul>
</div>
<br />
<center>
<h2>SAYFA SİLME</h2>
<?php
$sorgu=mysql_query("select * from sayfalar order by id ASC");
while($bilgi=mysql_fetch_array($sorgu))
{
	echo "<li><a href=\"sayfa_guncelle.php?sayfa={$bilgi['id']}\">{$bilgi['isim']} </a><a href=\"sayfa_sil.php?sayfa={$bilgi['id']}\">-[SİL]</a></li>\n";
}

?>


</center>
<?php  include("includes/footer.php"); ?>