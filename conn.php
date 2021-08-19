
<?php

$connection = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysqli_select_db( $connection,"mydata"); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$name = $_POST['firstname'];
$email = $_POST['email'];
$course = $_POST['select'];
$address = $_POST['add'];
$gender = $_POST['gender'];
$pass = $_POST['psw'];
if($name !=''||$email !=''){

$query = mysqli_query("insert into students(name, email, course, address, gender, passwd) values ('$name', '$email', '$course', '$address','$gender','$pass')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysqli_close($connection); // Closing Connection with Server
?>
