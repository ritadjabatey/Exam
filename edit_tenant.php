<?php
$tenant_name = $_POST['tenant_name'];
$contact = $_POST['contact'];
$res_address = $_POST['address'];
$email = $_POST['email'];
$filename = $_FILES["Image"]["name"];
$destination = "uploads/".$filename;
$id = $_POST['id'];

$pathname = $_FILES["Image"]["tmp_name"];
//echo(move_uploaded_file($_FILES["Image"]["tmp_name"], $desination));
if(move_uploaded_file($pathname, $destination))
{
  // echo '<img src="'.$desination.'">';  
 include("connection.php");

$sql = ("update tenants_tb set tenant_name ='$tenant_name',contact = '$contact',residential_address='$res_address'"
        . ",email_address = '$email',tenant_image='$destination' where tenant_id ='$id' ");
	
	if (!mysqli_query($con,$sql))
{
	die ('Error:'.mysqli_error($con));
}
else
{
	header('Location:tenant.php');
}   
}
 else {
   include("connection.php");

$sql = ("update tenants_tb set tenant_name ='$tenant_name',contact = '$contact',residential_address='$res_address'"
        . ",email_address = '$email' where tenant_id ='$id' ");
	
	if (!mysqli_query($con,$sql))
{
	die ('Error:'.mysqli_error($con));
}
else
{
	header('tenant.php');
}    
}
?>