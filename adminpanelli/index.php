<?php require_once("includes/config.php")?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/functions.php'; ?>
<?php error_reporting(E_ALL ^ E_NOTICE);?>
<div class="container">
<div class="row">
<div class="col-md-3">

<div class="enson">
<h3>
<i class="fas fa-spinner"><a href="#">En son konular</a></i>
</h3>
<hr />
<?php
enson_konu($_GET[page]);
if($_GET[page])
{
	header("location:yazi.php");
}

?>
</div><!--Enson kapanış-->
<br />
<div class="kategori enson">
<i class="fas fa-folder-open"> <a data-toggle="collapse" href="#collapseExample" aria-expanded="false">KATEGORİLER</a></i>

<div class="collapse" id="collapseExample">
<hr />
<div class="kategoriyazi">
<i class="fas fa-archive"><a href="#">Doğa makaleleri</a></i>
<br />
<i class="fas fa-archive"><a href="#">Eğitim makaleleri</a></i>
<br />
<i class="fas fa-archive"><a href="#">Macera makaleleri</a></i>
<br />
<i class="fas fa-archive"><a href="#">Sohbet makaleleri</a></i>
<br />
<i class="fas fa-archive"><a href="#">Eğlence makaleleri</a></i>
<br />
<i class="fas fa-archive"><a href="#">Kitap makaleleri</a></i>
<br />
<i class="fas fa-archive"><a href="#">İş hayatı makaleleri</a></i>
</div><!--kategoriyazi-->

</div><!--collapse-->

</div><!--kategori enson kapanış-->
<br />
</div><!--col-md-3 kapanış-->


<div class="col-md-6">
<br />
<?php
echo "<div class=\"konu_alani\"";
menu_olustur($_GET[page]);
if($_GET[page])
{
	header("location:yazi.php");
}
echo "</div>";
?>

</div><!--col-md-6 kapanış-->

<div class="col-md-3">
<div class="enson">
<h3><i class="fas fa-thumbs-up"><a href="#">En popüler konular</a></i></h3>
<hr />
<?php
enpopuler_konular($_GET[page]);
if($_GET[page])
{
	header("location:yazi.php");
}
?>
</div><!--enson kapanış-->

</div><!--ikinci col-md-3 kapanış-->
</div><!--Row kapanış-->
</div> <!--Container kapanış-->
<?php include 'includes/footer.php'; ?>