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
<h2 class="enson">HAKKIMIZDA</h2>
<p class="enson">MAKALE Online makale sitesinde binlerce kişi veya kuruluş tarafından  pek çok farklı konu ile ilgili tümüyle özgün içerik olarak hazırlanmış makaleler vardır. Söz konusu özgün içerikler kaynak gösterilerek web sitelerinde ve dökümanlarda kullanılabilir. Ayrıca özgün makale ve özgün içeriklerini online makale sitemizde yayınlatmak isteyen yazarlar da içeriklerini göndererek yayınlanmasını sağlayabilirler.ÖZGÜN İÇERİK Özgün içerik özellikle arama motorlarında ön sayfalarda yer almak isteyen web siteleri için çok önemli. İçeriğin özgün olması dijital dünyada daha önce yer almamasının yanısıra, kapsamı dili ve ifade ediliş şekli ile farklılık yaratması olarak tanımlanabilir. 

ÖZGÜN MAKALE

Özgün makaleler de özgün içeriklerin belli bir konuda daha kapsamlı ve detaylı bir şekilde e-dünyada yer alması şeklinde belirlenebiliyor. Özgün makale yazarlarının öncelikle makalelerinin içeriklerinin özgün, başka kaynaklarda yayınlanmamış, gerçekten kendilerine ve bilgi birikimlerine özel olması gerekiyor.

ONLINE İÇERİK

Online içerik denilince ilk önce akla gelen özgün veya özgün olmayan içeriğin ziyaretçilerin hizmetine canlı, online olarak sunulması anlaşılmakta. Dolayısıyla tüm dünyada bu konuda hazırlanan online içerik siteleri çok dinamik bir yapı içinde bulunmakta.

MAKALE NEDİR ? 

Makale nedir ve ne tür yazılar, içerikler makale olarak tanımlanabilir. Makale herhangi bir konuda bilgi, içerik ve deneyim sunan düz yazılara deniliyor. Bu tür yazılar genellikle okuyucuya belli bir fikri, görüşü ve bilgiyi bir parça da üzerine vurgular yaparak sunmayı içeriyor. Okuyucuyu çok fazla serbest bırakmadan, aklını, görüşlerini, fikirlerini kısmen yönlendirmek, kısmen değiştirmek kısmense de karşı görüş beklemek şeklinde hazırlanıyor.

MAKALE ÖRNEKLERİ

Makale örneklerini her türlü mecrada bulmak mümkün. Online makale sitesi de sağ tarafta yer alan farklı konulardaki öakale örnekleri ile okuyucuların ilgisini çekiyor ve onlara yol gösteriyor. İsteyen ziyaretçiler diledikleri makaleyi alarak ve kaynak göstererek diledikleri alanda kullanabiliyorlar.</p>
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