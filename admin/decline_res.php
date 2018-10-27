<?php

	include('conn.php');
	include('session.php');
	
	$rid=$_GET['id'];
	
	$a=mysqli_query($con,"select * from reservation where reserveid='$rid'");
	$b=mysqli_fetch_array($a);
	
	$u=mysqli_query($con,"select * from dealer where userid='".$b['userid']."'");
	$urow=mysqli_fetch_array($u);
	
	$up_credit=$b['total_cost']+$urow['credit'];
	
	mysqli_query($con,"update dealer set credit='$up_credit' where userid='".$b['userid']."'");
	mysqli_query($con,"update dealer_backup set credit='$up_credit' where userid='".$b['userid']."'");
	
	$query=mysqli_query($con,"select * from reserve_detail where reserveid='$rid'");
	while($row=mysqli_fetch_array($query)){
		$pq=mysqli_query($con,"select * from product where productid='".$row['productid']."'");
		$pqrow=mysqli_fetch_array($pq);
		
		$newqty=$pqrow['p_quantity']+$row['reserve_qty'];
		
		mysqli_query($con,"update product set p_quantity='$newqty' where productid='".$row['productid']."'");
		mysqli_query($con,"update product_backup set p_quantity='$newqty' where productid='".$row['productid']."'");
	}
	
	mysqli_query($con,"update reservation set res_status='3', action_date=NOW() where reserveid='$rid'");
	
	mysqli_query($con,"insert into activitylog (userid,action,activity_date) values ('".$_SESSION['id']."','Decline reservation - Dealer: ".$urow['firstname']." | Amount: ".$b['total_cost']."',NOW())");
	?>
		<script>
			window.alert('Reservation Declined!');
			window.history.back();
		</script>
	<?php

?>