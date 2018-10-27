<?php

	include('session.php');
	
	$id=$_GET['id'];
	
	$e=mysqli_query($con,"select * from dealer where userid='$id'");
	$er=mysqli_fetch_array($e);
	
	$credit=$_POST['credit']; 
	
	mysqli_query($con,"update dealer set credit='$credit' where userid='$id'");
	
	mysqli_query($con,"insert into activitylog (userid,action,activity_date) values ('".$_SESSION['id']."','Edit credit - Dealer: ".$er['firstname']." | Credit: ".$credit."',NOW())");
	
	?>
		<script>
			window.alert('Credit updated successfully!');
			window.history.back();
		</script>
	<?php
	
?>