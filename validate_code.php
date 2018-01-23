            
                <?php
$q = $_GET['q'];


 include("connect.php");
$result = mysqli_query($con,"select count(student_code) from student_tb where student_code ='$q'");


while($row = mysqli_fetch_array($result)) {
$counter = $row ['count(student_code)'];


}
if ($counter > 0)
{
 echo '<div class="invalid">code already exists</div>';
 
}
else
{
    echo '<font color=green>valid code</font>';
}
            
                
?>

<style>
    .invalid
    {
       color :red;
    }
    
    </style>