<?php
	include('session.php');
	$lid=$_GET['id'];
	
	$a=mysqli_query($con,"select * from liquidation where liquidationid='$lid'");
	$b=mysqli_fetch_array($a);
	
	mysqli_query($con,"delete from liquidation where liquidationid='$lid'");
	mysqli_query($con,"insert into activitylog (userid,action,activity_date) values ('".$_SESSION['id']."','Delete liquidation - Description: ".$b['l_description']."',NOW())");
	?>
		<script>
			window.alert('Liquidation deleted successfully!');
			window.history.back();
		</script>
	<?php

?>