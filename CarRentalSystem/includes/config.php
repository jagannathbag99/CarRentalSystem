<?php
	$host = "localhost";
	$user = "root";
	$pass = "Jaga@1999";
	$db = "CarRentalSystem";
	
	$conn = new mysqli($host, $user, $pass, $db);
	if($conn->connect_error){
		echo "Failed:" . $conn->connect_error;
	}
?>
