<?php
$str="hello i'm <h1>Anmol</h1>";
echo $str;
$s=filter_var($str,FILTER_SANITIZE_STRING);
echo $s;
$i="5";
if(filter_var($i,FILTER_VALIDATE_INT)==true)
{
	echo "$i is integer";
}
else
{
	echo "$i is not Integer";
}
$i="iamanmol...,@gmail.co,m";
if(filter_var($i,FILTER_VALIDATE_EMAIL)==true)
{
	echo "$i is email";
}
else
{
	echo "$i is not email";
}
$i="iamanmol...,@gmail.co,m";
$e=filter_var($i,FILTER_SANITIZE_EMAIL);
echo $e;
$i="http;<p>\\www.google.com";
if(filter_var($i,FILTER_VALIDATE_URL)==true)
{
	echo "$i is url";
}
else
{
	echo "$i is not url";
}
$i="http;<p>\\www.google.com";
$e=filter_var($i,FILTER_SANITIZE_URL);
echo $e;
$ip="100.124.4.95:200";
if(filter_var($ip,FILTER_VALIDATE_URL)==true)
{
	echo "$ip is valid";
}
else
{
	echo "$ip is not valid";
}
?>