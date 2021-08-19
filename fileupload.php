<html>
<head>


</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
select file<input type="file" name="myfile">
<input type="submit" value="ok">
</form>
<?php
	
	 if(isset($_FILES['myfile']))
	 {	 echo "ssdone"; 
		 $fname=$_FILES['myfile']['name'];
		 $fsize=$_FILES['myfile']['size'];
		 $ftype=$_FILES['myfile']['type'];
		 $ftmp=$_FILES['myfile']['tmp_name'];
		 $ext=strtolower(end(explode(".",$fname)));
		 if($ext=='jpg' || $ext=='png' ||$ext=='jpeg')
		 {
		 move_uploaded_file($ftmp,"img/".$fname);
		
		 echo "$fname";
		 }
		 else
		 {
			 echo "file type mismatched";
		 }
		
	 }
	 

?>
</body>
</html>
