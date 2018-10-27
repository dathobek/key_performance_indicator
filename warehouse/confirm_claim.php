<?php
	
	include('session.php');
	
	$id=$_REQUEST['id'];
	
	$d=mysqli_query($con,"select * from claim left join dealer on dealer.userid=claim.userid where claimid='$id'");
	$drow=mysqli_fetch_array($d);
	
	mysqli_query($con,"update claim set claim_status='1' where claimid='$id'");
	mysqli_query($con,"insert into activitylog (userid,action,activity_date) values ('".$_SESSION['id']."','Give purchased product/s to Dealer: ".$drow['firstname']." ".$drow['lastname']."',NOW())");
	
	?>
		<script>
			window.alert('Purchased products received. Transaction complete!');
			window.history.back();
		</script>
	<?php
?>