<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (isset($_POST['id']))
{
    

            include("connect.php");
            $id = $_POST['id'];


            $sql = ("delete from question_tb where question_id = '$id'  ");

                    if (!mysqli_query($con,$sql))
            {
                    die ('Error:'.mysqli_error($con));
            }
            else
            {
                echo('Item deleted <br/>');
                    echo('<a href="questions.php"> Add  Question</a>');
            }
}
else
{
 header ('Location:questions.php');
}
?>