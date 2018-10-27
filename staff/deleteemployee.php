<?php
	include('session.php');
	$eid=$_GET['id'];
	
	$e=mysqli_query($con,"select * from employee where userid='$eid'");
	$er=mysqli_fetch_array($e);
	
	mysqli_query($con,"delete from `user` where userid='$eid'");
	mysqli_query($con,"delete from employee where userid='$eid'");
	
	mysqli_query($con,"insert into activitylog (userid,action,activity_date) values ('".$_SESSION['id']."','Delete employee - Firstname: ".$er['firstname']."',NOW())");
	
	?>
		<script>
			window.alert('Employee deleted successfully!');
			window.history.back();
		</script>
	<?php

?>