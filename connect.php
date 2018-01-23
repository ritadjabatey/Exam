<?php
$con= mysqli_connect("localhost","root","","exam_db");
if (mysqli_connect_error())
	{
	echo "Failed to connect to MYSQL:". mysqli_connect_error();
	die ("connection error");
	}


?>
