<?php
	session_start();	
	if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
			header('location:../index.php');
			exit();
	}
	include('conn.php');

	$sq=mysqli_query($con,"select * from dealer left join `user` on user.userid=dealer.userid where dealer.userid='".$_SESSION['id']."'");
	$srow=mysqli_fetch_array($sq);
	
	$user=$srow['username'];
?>