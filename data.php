<?php
$id=intval($_GET['q']);
$con=new mysqli("localhost","root","","anmol");
if(!$con)
{
	echo "failed";
}
else
{

		echo "sucefully connected"; 
		$sql="select * from emp where eid='$id'";
		
		
		$res=$con->query($sql);
		if($res==True)
		{
			echo "<html>
<body>
<table border=1>
<tr><th>emp id</th>
<th>emp Name</th>
<th>emp pro</th></tr>";
			while($r=($res->fetch_assoc()))
			{
				
				
			echo "<tr><td>Emp id: $r[eid]</td>";
		echo"<td>Emp Name: $r[ename]</td>";
		echo"<td>Emp Profile:$r[epro]</td></tr>";
			}
			echo "</table>
</body>
</html>";
		}
		
	mysqli_close($con);	
	
}
?>

