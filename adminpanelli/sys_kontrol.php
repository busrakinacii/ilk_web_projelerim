<?php require_once("includes/config.php");
$username=$_POST[username];
$password=$_POST[password];
$sorgu=mysql_query("select * from kullanicilar where username='$username' AND password='$password'");
$sonuc=mysql_num_rows($sorgu);

if($sonuc==0)
{
	header("location:login.php");
}
else
{
	$_SESSION['uname']=$username;
	header("location:msayfalar.php");
}

 ?>