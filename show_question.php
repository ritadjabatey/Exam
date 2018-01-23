            
                <?php



 include("connect.php");
$result = mysqli_query($con,"select * from question_tb");
$n =1;

while($row = mysqli_fetch_array($result)) {
echo'<tr>';
echo '<td>'.$n++.'</td>';
//echo '<td>'.'<a href="delete.php?id='.$row['question_id'].'" class="btn btn-danger">Remove</a>'.'</td>';
echo'<td>'.'<button type="button" onclick="del('.$row['question_id'].')" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
Delete Question
</button>'.'</td>';
echo '<td>'.'<a href="edit_questions.php?id='.$row['question_id'].'" class="btn btn-info">Edit</a>'.'</td>';
echo '<td>'.$row['question'].'</td>';
echo'<td>'. $row['option_a'].'</td>';
echo '<td>'.$row['option_b'].'</td>';
echo'<td>'. $row['option_c'].'</td>';
echo'<td>'. $row['option_d'].'</td>';
echo'<td><img src="'. $row['question_image'].'"class="img-circle"   width="100px" height="100px"></td>';
 echo'<td>'. $row['ans'].'</td>';
echo '<td>'.$row['score'].'</td>';
echo '</tr>';


}
                
            
                
?>