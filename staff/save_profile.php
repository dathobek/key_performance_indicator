<?php
	include('session.php');
	
	$firstname= $_POST['firstname'];
	$middle= $_POST['middle'];
	$lastname= $_POST['lastname'];
	$gender= $_POST['gender'];
	$address= $_POST['address'];
	$contact= $_POST['contact'];
	$birthdate= $_POST['birthdate'];
	$hiredate= $_POST['hire_date'];
	
	$uq=mysqli_query($con,"select * from dealer where userid='".$_SESSION['id']."'");
	$uqrow=mysqli_fetch_array($uq);
	
	$fileInfo = PATHINFO($_FILES["image"]["name"]);
	
	if (empty($_FILES["image"]["name"])){
		$location=$uqrow['photo'];
	}
	else{
		if ($fileInfo['extension'] == "jpg" OR $fileInfo['extension'] == "png") {
			$newFilename = $fileInfo['filename'] . "_" . time() . "." . $fileInfo['extension'];
			move_uploaded_file($_FILES["image"]["tmp_name"], "../upload/" . $newFilename);
			$location = "upload/" . $newFilename;
		}
		else{
			$location=$uqrow['photo'];
			?>
				<script>
					window.alert('Photo not updated. Please upload JPG or PNG photo only!');
				</script>
			<?php
		}
	}
	
	mysqli_query($con,"update employee set firstname='$firstname',middle_i='$middle',lastname='$lastname',address='$address',contact_info='$contact',birthdate='$birthdate'
	,gender='$gender',hire_date='$hiredate',photo='$location' where userid='".$_SESSION['id']."'");
	
	mysqli_query($con,"update employee_backup set firstname='$firstname',middle_i='$middle',lastname='$lastname',address='$address',contact_info='$contact',birthdate='$birthdate'
	,gender='$gender',hire_date='$hiredate',photo='$location' where userid='".$_SESSION['id']."'");
	
	mysqli_query($con,"insert into activitylog (userid,action,activity_date) values ('".$_SESSION['id']."','Update profile',NOW())");
	
	?>
		<script>
			window.alert('Profile updated successfully!');
			window.history.back();
		</script>
	<?php
	
?>