<?php

	$conn = mysqli_connect('localhost','root','','customer');

	if(!$conn)
		die("Error while connecting...!").mysqli_connect_error($conn);

 ?>