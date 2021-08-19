
<?php
$a=intval($_GET['q']);
$flag=0;
for($i=0;$i<$a;$i++)
{
	if($a%$i==0)
	{
		$flag++;
		break;
	}
}
if($flag==1)
{
	echo "not prime";
}
else
{
	echo "prime";
}
?>