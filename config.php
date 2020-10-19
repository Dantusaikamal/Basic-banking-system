<?php
	$servername = 'localhost';
	$user = 'sai';
	$pass = '2935';
	$dbname = 'banktsf';

	$conn = mysqli_connect($servername,$user,$pass,$dbname);

	if(!$conn){
		die("Could Not Connect to the database".mysqli_connect_error());
	}

?>
