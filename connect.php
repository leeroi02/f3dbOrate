<?php 
	$connection = new mysqli('localhost', 'root','','dbOrate');
	
	if (!$connection){
		die (mysqli_error($mysqli));
	}
		
?>