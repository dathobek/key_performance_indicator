<?php

	include('session.php');
	$id=$_GET['id'];
	$eq=mysqli_query($con,"select * from employee where employeeid='$id'");
	$erow=mysqli_fetch_array($eq);
	
	$firstname=$_POST['firstname'];
	$middlename=$_POST['middlename'];
	$lastname=$_POST['lastname'];
	$address=$_POST['address'];
	$contact=$_POST['contact'];
	$birthdate=$_POST['birthdate'];
	$gender=$_POST['gender'];
	$position=$_POST['position'];
	$memdate=$_POST['memdate'];
	$access=$_POST['access'];
	
	$fileInfo = PATHINFO($_FILES["image"]["name"]);
	if ($fileInfo['filename']==""){
		$location=$erow['photo'];
	}
	else{
	$newFilename = $fileInfo['filename'] . "_" . time() . "." . $fileInfo['extension'];
	move_uploaded_file($_FILES["image"]["tmp_name"], "../upload/" . $newFilename);
	$location = "upload/" . $newFilename;
	}
	
	mysqli_query($con,"update employee set firstname='$firstname',middlename='$middlename',lastname='$lastname',address='$address',contact_info='$contact',birthdate='$birthdate',gender='$gender',positionid='$position',member_date='$memdate',access_level='$access',photo='$location' where employeeid='$id'");
	
	mysqli_query($con,"insert into activitylog (employeeid,action,activity_date) values ('".$_SESSION['id']."','Update admin - Username: ".$erow['username']."',NOW())");

	header('location:admin_profile.php?id='.$id);
?>