


<?php
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$error =" ";
if (isset($_POST['login']))
{
    

$student_code = $_POST['student_code'];
$student_pass = $_POST['student_pass'];

 include("connect.php");
$result = mysqli_query($con,"select * from student_tb where "
        . "student_code='$student_code'and student_pass='$student_pass'");

if(mysqli_num_rows($result)>0)
{ 
 $_SESSION['st_code'] = $student_code;
  header('Location: st_panel.php');



}
else
{
   $error ="Invalid Login";
}
}
else
{
   // header('Location: index.php');
}


          


?>

<html>
     <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
          <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Custom CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <!-- Custom CSS -->
    <link href="css/heroic-features.css" rel="stylesheet">
    </head>  
    
    <body>
        <div class="container"> 
            <div class="row">
                <div class="col-sm-12">
                     <div class="col-sm-4">
                     </div>
                         <div class="col-sm-4">
                                  <div class="card text-center">
  <div class="card-header">
<h4 class="card-title">STUDENT LOGIN</h4>
  </div>
  <div class="card-body">
    
      <form method = "post" action="index.php">
           <div class="form-group">
    <label for="exampleInputEmail1">Student Code</label>
    <input name="student_code" class="form-control form-control-lg" type="text" placeholder="Enter Student Code">
    
  </div>
            <div class="form-group">
    <label for="exampleInputEmail1">Password</label>
    <input name ="student_pass" class="form-control form-control-lg" type="password" placeholder="Enter Student Code">
    
  </div>
          <p>
              <input class="btn btn-primary"type="submit" name="login" value="login">
          </p>          
          
      </form>
      
      
      
      
   
  </div>
  <div class="card-footer ">
   <?php print ($error)?>
  </div>
</div> 
                         
                         
                         
                         
                         </div>
                         <div class="col-sm-4">
                     </div>
                    
      
                    
                    
                    
                    
                    
                </div>
            </div>
        </div>
        
        
    </body>
          <!-- jQuery -->
      <script src="js/jquery.js" type="text/javascript"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</html>
