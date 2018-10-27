<?php
	
	include('session.php');
	
	$newlimit=$_GET['credit'];
	$sid=$_GET['id'];
	$total=$_GET['total'];
	
	mysqli_query($con,"update employee set credit_limit='$newlimit' where employeeid='".$_SESSION['id']."'");
	mysqli_query($con,"update sales set sales_total='$total' where salesid='$sid'");
	
	mysqli_query($con,"insert into activitylog (employeeid,action,activity_date) values ('".$_SESSION['id']."','Add sales - Total amount: ".$total."',NOW())");
	header('location:history.php');

?>