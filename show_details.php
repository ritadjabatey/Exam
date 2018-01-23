                <?php



 include("connect.php");
$result = mysqli_query($con,"select* from student_tb");

echo'<select name="st_lastname" class="form-control">';


while($row = mysqli_fetch_array($result)) {

echo $row['st_id'].'" >'.$row['st_lastname'].';

}
echo'</select>';
            
                
?>

