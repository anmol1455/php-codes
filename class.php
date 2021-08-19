<?php
class student 
{
public $roll;
public $name;
function accept($roll,$name)
{
$this -> roll=$roll;
$this -> name=$name;
}
function display()
{
echo " <h1>your name is :</h1>" ,$this -> name;
echo "<br>";
echo "Roll no. is :" ,$this -> roll;
}
}
$st1 = new student();
$st2 =new student();
$st1 -> accept (101,"Kamal");
$st2 -> accept (102,"Anil");
$st1 -> display();
echo "<br>";
$st2 -> display();
?>