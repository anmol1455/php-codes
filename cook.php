<?php
#setcookie("Myname","Anmol",time()+3600);


?>
<html>
<body>
<?php
if(!isset($_COOKIE['Myname']))
{
	echo "Myname cookie is not set";
}
else
{
	echo "cookie is set <br> value of cookie is:".$_COOKIE['Myname'];
}
$a=10;
$b=2;
try{
	
	$c=$b/$c;
	throw new Exception("cant divide by zero");
	echo "result=".$c;
}
catch(Exception $e){
	echo $e.getmessage();
}

?>
</body>
</html>                                                            