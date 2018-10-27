<?php
	
	include('session.php');
	
	$employee=$_POST['l_employee'];
	$liquidation=$_POST['liquidation'];
	$l_amount=$_POST['l_amount'];
	
	$a=mysqli_query($con,"select * from liquidation where liquidationid='$liquidation'");
	$b=mysqli_fetch_array($a);
	
	mysqli_query($con,"insert into liqui_report (userid,liquidationid,amount,liqui_date) values ('$employee','$liquidation','$l_amount',NOW())");
	mysqli_query($con,"insert into activitylog (userid,action,activity_date) values ('".$_SESSION['id']."','Add liquidation report - Description: ".$b['l_description']." | Amount: ".$l_amount."',NOW())");
	?>
		<script>
			window.alert('Liquidation Report addedd successfully!');
			window.history.back();
		</script>
	<?php

?>