<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$id = $_REQUEST['id'];

 include("connect.php");
$result = mysqli_query($con,"select * from question_tb where question_id = '$id'");
$n =1;

while($row = mysqli_fetch_array($result)) {
$question = $row['question'];
$question_image = $row['question_image'];
$op_a = $row['option_a'];
$op_b = $row['option_b'];
$op_c = $row['option_c'];
$op_d = $row['option_d'];
$ans = $row['ans'];
$score = $row['score'];

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

    <!-- Custom CSS -->
    <link href="css/heroic-features.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row">
            <div class="col-lg-6">
                <form method="POST" action="edit_quest.php" enctype="multipart/form-data">
       
            
                <div class="col-sm-12">
                <textarea name="question"   class="form-control"  cols="50" rows="3"><?php print ($question)?></textarea>
                </div>
         <div class="row">
               
             <div class="col-sm-4">
                <p>
                    OPTION A  <input name="op_a" value="<?php print ($op_a)?>"  type="text" class="form-control" required>   
                 <input name="id" value="<?php print ($id)?>"  type="hidden" class="form-control" required> 
                </p>
                
                <p>
              OPTION B  <input name="op_b" value="<?php print ($op_b)?>" type="text" class="form-control" required>   
                </p>
                
                <p>
              OPTION C  <input name="op_c" value="<?php print ($op_c)?>" type="text" class="form-control" required>   
                </p>
                 
             </div>
                
             <div class="col-sm-4">
               
                 <p>
              OPTION D  <input name="op_d" value="<?php print ($op_d)?>"type="text" class="form-control" required>   
                </p>
                
                <p>
              ANS  <input name="ans" type="text" value="<?php print ($ans)?>"class="form-control" required>   
                    </p>
                  <p>
              Score  <input  name="score" type="number"value="<?php print ($score)?>" class="form-control" required>   
                </p> 
                 
                 
             </div>
             <div class="col-sm-4" style="padding-top:20px ">
                   <img src="<?php echo $question_image;?>" class="img-responsive img-rounded">
             </div> 
         </div> 
               <div class="row">
                         <div class="col-lg-12"style="text-align: center;">
                             <input type="file" name="Image" >
                        </div>
                    </div>     
         <div class="row" >
             <div class="col-lg-12"style="text-align: center;">
           <input type="submit" value="Update" class="btn btn-info">
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
    </body>
      <!-- jQuery -->
      <script src="js/jquery.js" type="text/javascript"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</html>
