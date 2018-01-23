<?php
session_start();
$student_table = "tb".$_SESSION['st_code'];


            include("connect.php");

            $sql = ("drop table $student_table	");	
			

                    if (!mysqli_query($con,$sql))
            {
                    die ('Error:'.mysqli_error($con));
            }

session_destroy();
header('location:index.php');
?>