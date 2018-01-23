

<?php

if(isset ($_post['ques']))
{
	$checks1 = $_post['ques'];
	$checks2 = $_post['ques1'];
	$checks3 = $_post['ques2'];
	echo $checks1+$checks2;
	
}
else
{
	echo'not set';
}
?>