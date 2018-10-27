<?php
    // database connection to mysql 
	$con=mysqli_connect("localhost","root","","opils");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL:".mysqli_connect_error();
	}
;?>