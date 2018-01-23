<?php
$st_lastname = $_POST['st_lastname'];
$st_firstname = $_POST['st_firstname'];
$student_code = $_POST['student_code'];
$student_pass = $_POST['student_pass'];
$st_course = $_POST['courses'];
$filename = $_FILES["Image"]["name"];
$desination = "uploads/".$filename;

$pathname = $_FILES["Image"]["tmp_name"];
//echo(move_uploaded_file($_FILES["Image"]["tmp_name"], $desination));
if(move_uploaded_file($pathname, $desination))
{
  // echo '<img src="'.$desination.'">';  
 include("connect.php");

$sql = ("insert into student_tb(st_lastname,st_firstname,student_code,student_pass,st_course,st_image)values
('$st_lastname','$st_firstname','$student_code','$student_pass','$st_course','$desination')");
	
	if (!mysqli_query($con,$sql))
{
	die ('Error:'.mysqli_error($con));
}
else
{
	header('Location:st_reg.php');
}   
}
else
{
 include("connect.php");

$sql = ("insert into student_tb(st_lastname,st_firstname,student_code,student_pass,st_course)values
('$st_lastname','$st_firstname','$student_code','$student_pass','$st_course')");
	
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