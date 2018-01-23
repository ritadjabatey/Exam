<?php
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 $student_code = $_SESSION['st_code'];
 include("connect.php");
$result = mysqli_query($con,"select
student_tb.st_lastname,
student_tb.st_firstname,
student_tb.st_image,
courses.course_name
 from student_tb inner join courses  
 on
 courses.course_id = student_tb.st_course

 where student_code='$student_code '");
while($row = mysqli_fetch_array($result)) {
$student_fullname = $row['st_firstname'].' '.$row['st_lastname'];
$image = $row['st_image'];
$course = $row['course_name'];
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
                     <div class="col-sm-3">
                     </div>
                         <div class="col-sm-6">
                                  <div class="card text-center">
  <div class="card-header">
<h4 class="card-title">STUDENT DETAILS</h4>
  </div>
  <div class="card-body">
    <div class="">
    
        <img src="<?php print($image)?>" width="150px" height="150px" class="img-rounded img-thumbnail">
     
  </div> 
      <h4 class="">
    
   welcome 
 <?php print($student_fullname)?>
     
  </h4>   
     <h4 class="">
    
  Course offered:
 <?php print($course)?>
     
  </h4>     
      
      
      
   
  </div>
  <div class="card-footer ">
  <form method="post" action="create_quest.php">
 <input type="submit"  value="Take Test"class="btn btn-primary btn-lg">
  </form>
  </div>
</div> 
                         
                         
                         
                         
                         </div>
                         <div class="col-sm-3">
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

