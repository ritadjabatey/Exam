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
    <link href="css/heroic-features.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </head>  
    
    <body style="padding:0px;">
<nav class="navbar navbar-expand-lg  navbar-dark bg-dark" style="background-color:#563d7c!important;">
  <a class="navbar-brand" href="#">Niit Online Exam</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
       
    
  </div>
 <button class="btn btn-success" style="margin-right:10px;"> End Test</button>
  

    <a class="btn btn-danger" href="logout.php"> Logout</a>
 <!--<button class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" > Logout</button>-->
  
  </nav>
	
        <div class="container" style ="margin-top:10px;"> 
          <div class="row"> 
          
		 <div class="col-sm-2" style ="text-align:center; padding-top:20px;padding-bottom:20px; background-color:#563d7c!important" > 
						   <div > 
						   
						   <img src="<?php print($image)?>" width="150px" height="150px" class="img-rounded img-thumbnail">
						  
						</div> 
		       <div  style="text-align:center;font-size: larger;color:#fff; padding-top:10px;"> 
           
		  
		   <?php
		   echo $student_fullname;
		   ?>
		  
		   
        </div>   
		 <div  style="text-align:center;font-size: small;color:#fff; padding-top:10px;"> 
           
		  
		   
		     <?php
		   echo $course;
		   ?>
		   
        </div>     
		   
        </div> 
		<div class="col-sm-5">
	 <?php
		   include ('st_questions.php');
		   ?>
		 </div>  
    <div class="col-sm-5">
 <button class="btn btn-success">Score</button>
		 </div> 
        
        </div>
            

  </div>
  
       
 <!-- modal box -->
    
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <form action="" method="post">
	  <input type="submit" value="submit">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
         </div>
     
    </div>
  </div>
</div>


	   
    <!-- modal box -->     
    </body>
          <!-- jQuery -->
		



		
		   <script>
          function logout()
        {
            document.del_from.action="logout.php";
             document.del_from.submit();
              
        }
            </script>
       <!-- jQuery -->
      

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
</html>

