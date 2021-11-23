<?php require_once("includes/config.php"); ?>
<?php  include("includes/header.php"); ?>

<center>
<br />
<div class="enson" style="width:400px";>

<br />
<h2><font color="#000000">YÖNETİCİ GİRİŞİ</font></h2>
<form action="sys_kontrol.php" method="post">
<p>KULLANICI ADI:<br /><input id="submit" type="text" name="username" /></p>
<p>KULLANICI ŞİFRESİ:<br /><input id="submit" type="password" name="password" /></p>
<p><br /><input class="giris" type="submit" id="submit" value="GİRİŞ" /></p>
</form>
</div>

</center>
<?php  include("includes/footer.php"); ?>