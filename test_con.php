<?php 

	
	$host = 'localhost';
	$user = "root";
	$pass = '';
	$db = "ajax_demo";

	$conn = mysqli_connect($host,$user,$pass,$db);

	if ($conn) {
		# code...
		echo 1;
	}

	else
		echo 0;

 ?>