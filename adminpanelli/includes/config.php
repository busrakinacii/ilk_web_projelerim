<?php
$db_adres="localhost";
$db_user="root";
$db_pass="";
$db_tablo="bsiteproje";

$conn=mysql_connect($db_adres,$db_user,$db_pass);
if(!$conn)
{
	 die("BAĞLANTI HATASI".mysql_error());
	 }
$db_select=mysql_select_db($db_tablo,$conn);

if(!$db_select)
{
	die("BAĞLANTI HATASI".mysql_error());
}
mysql_query("SET NAMES utf8");
session_start();
?>