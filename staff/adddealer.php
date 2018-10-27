<?php
	include('session.php');
	
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	$firstname=$_POST['firstname'];
	$middle=$_POST['middle'];
	$lastname=$_POST['lastname'];
	$address=$_POST['address'];
	$contact=$_POST['contact'];
	$birthdate=$_POST['birthdate'];
	$gender=$_POST['gender'];
	$joindate=$_POST['joindate'];
	$recruiter=$_POST['recruiter'];
	
	$fileInfo = PATHINFO($_FILES["image"]["name"]);
	
	if (empty($_FILES["image"]["name"])){
		$location="";
	}
	else{
		if ($fileInfo['extension'] == "jpg" OR $fileInfo['extension'] == "png") {
			$newFilename = $fileInfo['filename'] . "_" . time() . "." . $fileInfo['extension'];
			move_uploaded_file($_FILES["image"]["tmp_name"], "../upload/" . $newFilename);
			$location = "upload/" . $newFilename;
		}
		else{
			$location="";
			?>
				<script>
					window.alert('Photo not added. Please upload JPG or PNG photo only!');
				</script>
			<?php
		}
	}
	
	mysqli_query($con,"insert into `user` (username,password,access_level) values ('$username','$password','4')");
	$uid=mysqli_insert_id($con);
	
	mysqli_query($con,"insert into `user_backup` (userid, username,password,access_level) values ('$uid', '$username','$password','4')");

	mysqli_query($con,"insert into dealer (userid,firstname,middle_i,lastname,address,contact_info,birthdate,gender,join_date,credit,recruiter,photo) 
					values ('$uid','$firstname','$middle','$lastname','$address','$contact','$birthdate','$gender','$joindate','1000','$recruiter','$location')");
	
	mysqli_query($con,"insert into dealer_backup (userid,firstname,middle_i,lastname,address,contact_info,birthdate,gender,join_date,credit,recruiter,photo) 
					values ('$uid','$firstname','$middle','$lastname','$address','$contact','$birthdate','$gender','$joindate','1000','$recruiter','$location')");
					
	mysqli_query($con,"insert into activitylog (userid,action,activity_date) values ('".$_SESSION['id']."','Add dealer - Firstname: ".$firstname."',NOW())");
	
	?>
		<script>
			window.alert('Dealer added successfully!');
			window.history.back();
		</script>
	<?php
?>