<?php
	//$num=$_REQUEST['q'];
	$num=intval($_GET['q']);
	if($num%2==0)
	{
		echo "Even";
	}
	else
	{
	echo "odd";
	}
?>