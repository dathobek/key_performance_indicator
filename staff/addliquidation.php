<?php
	include('session.php');
	
	$desc=$_POST['desc'];
	
	mysqli_query($con,"insert into liquidation (l_description) values ('$desc')");
	mysqli_query($con,"insert into activitylog (userid,action,activity_date) values ('".$_SESSION['id']."','Add liquidation - Description: ".$desc."',NOW())");
	?>
		<script>
			window.alert('Liquidation addedd successfully!');
			window.history.back();
		</script>
	<?php
?>