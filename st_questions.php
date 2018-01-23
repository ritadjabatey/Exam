            
                <?php
$student_table = "tb".$_SESSION['st_code'];

 include("connect.php");
$result = mysqli_query($con,"select * from $student_table");
$n =1;
$r_n = 0;

while($row = mysqli_fetch_array($result)) {

echo $n++;
$r_n++;
//echo '<td>'.'<a href="delete.php?id='.$row['question_id'].'" class="btn btn-danger">Remove</a>'.'</td>';
echo ' '.$row['question'];
echo'<ul>';

echo' <li><input class="radio"  name ="'.$r_n.'"type="radio">'. $row['option_a'].'</li>';
echo '<li><input class="radio" name ="'.$r_n.'"  type="radio">'.$row['option_b'].'</li>';
echo'<li><input class="radio"  name ="'.$r_n.'" type="radio">'. $row['option_c'].'</li>';
echo'<li><input class="radio" name ="'.$r_n.'" type="radio">'. $row['option_d'].'</li>';
echo'</ul>';



}
                
            
                
?>

<style>
li
{
list-style: none;	
	
}
.radio
{
margin-right:10px;	
	
}


</style>