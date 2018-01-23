<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<html>
    <head>
        <title>Register Student</title>
        <meta charset="UTF-8">
          <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Custom CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <script src="code_validator.js" type="text/javascript"></script>
      <link href="css/style.css" rel="stylesheet" type="text/css"/>
      
      <!-- Custom CSS -->
    <link href="css/heroic-features.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-sm-3"></div>
                        <div class="col-sm-6">
                          
                                                                 <div class="card text-center">
  <div class="card-header ">
<h4 class="card-title ">STUDENT LOGIN</h4>
  </div>
  <div class="card-body">
                               
                                    <form  id="reg_st" name="form1" method="post" enctype="multipart/form-data">
                                   
                                        
                                        <div class="col-sm-12">
                                            <div class="col-sm-6" style="padding-left: 0px;padding-right: 0px;">
                                               
                                        <p>
                                        Student Last name   <input type="text"  class="form-control"name="st_lastname" id="st_lastname">   
                                    </p>
                                      <p>
                                     Student First name   <input type="text"class="form-control" name="st_firstname" id="st_firstname">   
                                    </p>
                                      <p>
                                          Student code    <input  oninput="check_code(this.value)"  type="text" class="form-control" name="student_code" id="st_code"> 
                                      <div id ="code_hint">
                                          
                                          
              Image                        </div>
                                    </p>  
                                               
                                                
                                                
                                                
                                            </div>
                                         <div class="col-sm-6">
                                                
                                             <img src="" alt=""   id="output"  style="margin-right:10px; "height="190px" width="190px" class="img-rounded" />
                                          

<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
</script>
                                             
                                             
                                             
                                             
                                           <div class="row">
                         <div class="col-lg-12"style="text-align: center;">
                             <input type="file" name=""accept="image/*" onchange="loadFile(event)" >
                        </div>
                    </div>
                                         
                                         </div>
                                        </div>
                                        <div class="col-sm-12">
                                         <p>
                                     Student Password    <input type="password" class="form-control"name="student_pass" id="st_pass">   
                                    </p>
                                     <p>
                                         COURSES
                                        <?php include ('courses.php')?>   
                                    </p>
                                        
                                        </div>
                                        
                                        
                                        
                                       
                                   
                                    <center>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Register Student
</button>
                                        </center>
                                    </form>
                                    
  </div>
                                                                 </div>
                                    
                                    
                                
                               
                            
                        
                            <div class="col-sm-3"></div>
                </div>
            </div>
        </div>
            
            
            
            
            
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
       Save Student?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success" onclick="save()">Save </button>
      </div>
    </div>
  </div>
   </div>
    </body>
    <script>
        function save()
        {
          var lastname = document.getElementById('st_lastname').value;
          if (lastname === "")
          {
              alert("Last name is empty");
          }
          else
          {
             document.form1.action="reg.php";
             document.form1.submit();
              
          }
            
            
        }
     </script>
    
       <!-- jQuery -->
      <script src="js/jquery.js" type="text/javascript"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</html>