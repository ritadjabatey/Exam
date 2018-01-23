<?php
$question = $_POST['question'];
$option_a = $_POST['op_a'];
$option_b = $_POST['op_b'];
$option_c = $_POST['op_c'];
$option_d = $_POST['op_d'];
$ans = $_POST['ans'];
$score = $_POST['score'];
$id = $_POST['id'];

$filename = $_FILES["Image"]["name"];
$desination = "uploads/".$filename;

$pathname = $_FILES["Image"]["tmp_name"];
//echo(move_uploaded_file($_FILES["Image"]["tmp_name"], $desination));
if(move_uploaded_file($pathname, $desination))
{
  // echo '<img src="'.$desination.'">';  
 include("connect.php");

$sql = ("update question_tb set question ='$question',option_a = '$option_a',option_b='$option_b'"
        . ",option_c = '$option_c',option_d = '$option_d',ans = '$ans',score = '$score',question_image='$desination' where question_id ='$id' ");
	
	if (!mysqli_query($con,$sql))
{
	die ('Error:'.mysqli_error($con));
}
else
{
	header('Location:questions.php');
}   
}
 else {
   include("connect.php");

$sql = ("update question_tb set question ='$question',option_a = '$option_a',option_b='$option_b'"
        . ",option_c = '$option_c',option_d = '$option_d',ans = '$ans',score = '$score' where question_id ='$id' ");
	
	if (!mysqli_query($con,$sql))
{
	die ('Error:'.mysqli_error($con));
}
else
{
	header('Location:questions.php');
}    
}
?>