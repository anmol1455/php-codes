<?php
	
	 if(isset($_FILES['myfile']))
	 {	 echo "ssdone"; 
		 $fname=$_FILES['myfile']['name'];
		 $fsize=$_FILES['myfile']['size'];
		 $ftype=$_FILES['myfile']['type'];
		 $ftmp=$_FILES['myfile']['tmp_name'];
		 move_uploaded_file($ftmp,"img/".$fname);
		
		 echo "$fname";
		
	 }
	 

?>