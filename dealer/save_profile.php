<?php
	include('session.php');
	$uid=$_GET['id'];

	$firstname= $_POST['firstname'];
	$middle= $_POST['middle'];
	$lastname= $_POST['lastname'];
	$gender= $_POST['gender'];
	$address= $_POST['address'];
	$contact= $_POST['contact'];
	$birthdate= $_POST['birthdate'];
	$recruiter= $_POST['recruiter'];
	$joindate= $_POST['joindate'];
	
	$uq=mysqli_query($con,"select * from dealer where userid='$uid'");
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
	
	mysqli_query($con,"update dealer set firstname='$firstname',middle_i='$middle',lastname='$lastname',address='$address',contact_info='$contact',birthdate='$birthdate'
	,gender='$gender',recruiter='$recruiter',join_date='$joindate',photo='$location' where userid='$uid'");
	
	mysqli_query($con,"update dealer_backup set firstname='$firstname',middle_i='$middle',lastname='$lastname',address='$address',contact_info='$contact',birthdate='$birthdate'
	,gender='$gender',recruiter='$recruiter',join_date='$joindate',photo='$location' where userid='$uid'");
	
	mysqli_query($con,"insert into activitylog (userid,action,activity_date) values ('".$_SESSION['id']."','Update profile',NOW())");
	
	?>
		<script>
			window.alert('Profile updated successfully!');
			window.history.back();
		</script>
	<?php
	
?>