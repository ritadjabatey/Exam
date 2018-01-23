<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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

    <!-- Custom CSS -->
    <link href="css/heroic-features.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row">
            <div class="col-lg-6">
                <form method="POST" action="insert_quest.php" enctype="multipart/form-data">
       
            
                <div class="col-sm-12">
                <textarea name="question"  class="form-control"  cols="50" rows="3"></textarea>
                </div>
         <div class="row">
               
             <div class="col-sm-6">
                <p>
              OPTION A  <input name="op_a"  type="text" class="form-control" required>   
                </p>
                
                <p>
              OPTION B  <input name="op_b" type="text" class="form-control" required>   
                </p>
                
                <p>
              OPTION C  <input name="op_c" type="text" class="form-control" required>   
                </p>
                 
             </div>
                
             <div class="col-sm-6">
                 
                 <p>
              OPTION D  <input name="op_d" type="text" class="form-control" required>   
                </p>
                
                <p>
              ANS  <input name="ans" type="text" class="form-control" required>   
                    </p>
                  <p>
              Score  <input  name="score" type="number" class="form-control" required>   
                </p> 
                 
                 
             </div>
              
         </div> 
                     <div class="row">
                         <div class="col-lg-12"style="text-align: center;">
                             <input type="file" name="Image" >
                        </div>
                    </div>
         <div class="row" >
             <div class="col-lg-12"style="text-align: center;">
           <input type="submit" value="Add" class="btn btn-success">
             </div>
         </div>
                   
     </form>
            </div>   
        <div class="col-sm-6" style="overflow:scroll;max-height: 500px;">
            <table class="table table-striped">
                <tr>
                     <th> No</th>
                     
                      <th> Delete</th>
                       <th>Edit</th>
                    <th> Questions</th>
                     <th> Option A</th>
                      <th> Option B</th>
                       <th> Option C</th>
                        <th> Option D</th>
                         <th> Image</th>
                         <th>  Answer</th>
                         <th>  Score</th>
                </tr>
               <?php
               include 'show_question.php';
               ?> 
               
            </table>
        </div>

       
     </div>
            </div>
        
        
                   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header btn-danger">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Are you sure you want to delete 
      
      <form id="del_from" name="del_from" method="post">
          <input type="hidden" name = "id" id="del_input"value="">
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button   class="btn btn-danger" onclick="do_del()">Delete </button>
      </div>
    </div>
  </div>
   </div>
        <script>
          function del(id)
          {
            document.getElementById('del_input').value = id;
        }
        function do_del()
        {
            document.del_from.action="delete.php";
             document.del_from.submit();
              
        }
            </script>
    </body>
      <!-- jQuery -->
      <script src="js/jquery.js" type="text/javascript"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <style>
       
        </style>
</html>
