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
	$position=$_POST['position'];
	$memdate=$_POST['memdate'];
	
	if ($position==6 or $position==7){
		$access="3";
	}
	else{
		$access=2;
	}
	
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
	
	mysqli_query($con,"insert into `user` (username,password,access_level) values ('$username','$password','$access')");
	$uid=mysqli_insert_id($con);
	
	mysqli_query($con,"insert into employee (userid,firstname,middle_i,lastname,address,contact_info,birthdate,gender,positionid,hire_date,photo) 
					values ('$uid','$firstname','$middle','$lastname','$address','$contact','$birthdate','$gender','$position','$memdate','$location')");
					
	mysqli_query($con,"insert into activitylog (userid,action,activity_date) values ('".$_SESSION['id']."','Add employee - Firstname: ".$firstname."',NOW())");
					
	?>
		<script>
			window.alert('Employee added successfully!');
			window.history.back();
		</script>
	<?php
?>