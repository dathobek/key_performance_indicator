<?php
	session_start();	
	if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
	header('location:../index.php');
    exit();
}
	include('conn.php');

	$sq=mysqli_query($con,"select * from `user` left join employee on employee.userid=user.userid where user.userid='".$_SESSION['id']."'");
	$srow=mysqli_fetch_array($sq);
	
	$user=$srow['username'];
?>