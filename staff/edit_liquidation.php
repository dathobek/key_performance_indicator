<?php
	
	include('session.php');
	$id=$_GET['id'];
	
	$description=$_POST['description'];
	
	mysqli_query($con,"update liquidation set l_description='$description' where liquidationid='$id'");
	mysqli_query($con,"insert into activitylog (userid,action,activity_date) values ('".$_SESSION['id']."','Update liquidation - Description: ".$description."',NOW())");
	?>
		<script>
			window.alert('Liquidation updated successfully!');
			window.history.back();
		</script>
	<?php

?>