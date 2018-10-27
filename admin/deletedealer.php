<?php
	include('session.php');
	$did=$_GET['id'];
	
	$e=mysqli_query($con,"select * from dealer where userid='$did'");
	$er=mysqli_fetch_array($e);
	
	mysqli_query($con,"delete from `user` where userid='$did'");
	mysqli_query($con,"delete from dealer where userid='$did'");
	
	mysqli_query($con,"insert into activitylog (userid,action,activity_date) values ('".$_SESSION['id']."','Delete dealer - Firstname: ".$er['firstname']."',NOW())");
	
	?>
		<script>
			window.alert('Dealer deleted successfully!');
			window.history.back();
		</script>
	<?php

?>