<?php

	include('conn.php');
	
	$sid=$_GET['id'];
	
	mysqli_query($con,"delete from sales where salesid='$sid'");
	mysqli_query($con,"delete from sales_details where salesid='$sid'");
	
	header('location:purchase.php');

?>