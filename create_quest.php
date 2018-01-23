<?php
session_start();
$student_table = "tb".$_SESSION['st_code'];
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    

            include("connect.php");
           


            $sql = ("create table $student_table
			(
question_id int,
question varchar(300),
question_image varchar(100),
option_a varchar(200),
option_b varchar(200),			
option_c varchar(200),			
option_d varchar(200),			
ans varchar(200),			
score int			
)
select question_id,question,question_image,
option_a,option_b,option_c,option_d,
ans,score from question_tb order by rand() limit 5			
			
			
			
			");

                    if (!mysqli_query($con,$sql))
            {
                   // die ('Error:'.mysqli_error($con));
            
header('location:logout.php');
            }
            header('location:exam.php');
?>