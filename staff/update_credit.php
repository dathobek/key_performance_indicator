<?php
	
	include('session.php');
	$id=$_GET['id'];
	
	$a=mysqli_query($con,"select * from employee where employeeid='$id'");
	$b=mysqli_fetch_array($a);
	
	$credit=$_POST['credit'];
	
	mysqli_query($con,"insert into activitylog (employeeid,action,activity_date) values ('".$_SESSION['id']."','Update credit from ".$b['credit_limit']." to ".$credit." - Username: ".$b['username']."',NOW())");
	mysqli_query($con,"update employee set credit_limit='$credit' where employeeid='$id'");
	
	header('location:admin_emp.php');

?>