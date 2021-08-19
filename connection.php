<?php
$servername="localhost";
$username="root";
$password="";
$dbname="signup";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn){
  echo "connected";
}

else{
  die("connection failed");



}
if(isset($_POST["submit"])){

$id=$_POST["id"];
$name=$_POST["name"];
$emailid=$_POST["emailid"];
$phoneno=$_POST["phoneno"];

$sql="INSERT INTO signup(id,name,emailid,phoneno) VALUES($id,'$name','$emailid','$phoneno');";
if(mysqli_query($conn,$sql))
{

  echo "Record inserted";

}

}












 ?>
