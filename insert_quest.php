<?php
$question = $_POST['question'];
$option_a = $_POST['op_a'];
$option_b = $_POST['op_b'];
$option_c = $_POST['op_c'];
$option_d = $_POST['op_d'];
$ans = $_POST['ans'];
$score = $_POST['score'];
$filename = $_FILES["Image"]["name"];
$desination = "uploads/".$filename;

$pathname = $_FILES["Image"]["tmp_name"];
//echo(move_uploaded_file($_FILES["Image"]["tmp_name"], $desination));
if(move_uploaded_file($pathname, $desination))
{
  // echo '<img src="'.$desination.'">';  
 include("connect.php");

$sql = ("insert into question_tb(question,option_a,option_b,
option_c,option_d,ans,score,question_image)values
('$question','$option_a','$option_b','$option_c','$option_d','$ans','$score','$desination')");
	
	if (!mysqli_query($con,$sql))
{
	die ('Error:'.mysqli_error($con));
}
else
{
	header('Location:questions.html');
}   
}
 else {

include("connect.php");

$sql = ("insert into question_tb(question,option_a,option_b,
option_c,option_d,ans,score)values
('$question','$option_a','$option_b','$option_c','$option_d','$ans','$score')");
	
	if (!mysqli_query($con,$sql))
{
	die ('Error:'.mysqli_error($con));
}
else
{
	header('Location:st_reg.php');
}        
     
}

?>