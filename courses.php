            
                <?php



 include("connect.php");
$result = mysqli_query($con,"select* from courses");

echo'<select name="courses" class="form-control">';


while($row = mysqli_fetch_array($result)) {

echo '<option value="'.$row['course_id'].'" >'.$row['course_name'].'</option>';

}
echo'</select>';
            
                
?>

