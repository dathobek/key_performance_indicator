<?php

	include('session.php');
	
	$rid=$_GET['id'];
	
	$claim_code=$_POST['claim_code'];
	
	$a=mysqli_query($con,"select * from reservation where reserveid='$rid'");
	$b=mysqli_fetch_array($a);
	
	if ($b['claim_code']!=$claim_code){
	?>
		<script>
			window.alert('Claim Code did not much!');
			window.history.back();
		</script>
	<?php
	}
	else{
	mysqli_query($con,"update reservation set res_status='2', action_date=NOW() where reserveid='$rid'");
	$u=mysqli_query($con,"select * from dealer where userid='".$b['userid']."'");
	$urow=mysqli_fetch_array($u);
	
	mysqli_query($con,"insert into sales (userid,sales_total,sales_date) values ('".$b['userid']."','".$b['total_cost']."',NOW())");
	$sid=mysqli_insert_id($con);
	
	mysqli_query($con,"insert into claim (userid) values ('".$b['userid']."')");
	$claimid=mysqli_insert_id($con);
	
	$c=mysqli_query($con,"select * from reserve_detail where reserveid='$rid'");
	$arr=array();
	while($d=mysqli_fetch_array($c)){
		$arr[]=$d['reserve_detailid'];
	}
	
	foreach($arr as $resid):
		$e=mysqli_query($con,"select * from reserve_detail left join product on product.productid=reserve_detail.productid where reserve_detailid='$resid'");
		$f=mysqli_fetch_array($e);
		
		if($f['p_discount']==1){
			$newqty=$f['reserve_qty']*2;
		}
		else{
			$newqty=$f['reserve_qty'];
		}
		
		mysqli_query($con,"insert into sales_details (salesid,productid,sales_qty) values ('".$sid."','".$f['productid']."','".$f['reserve_qty']."')");
		mysqli_query($con,"insert into claim_detail (claimid, productid, claim_qty) values ('$claimid', '".$f['productid']."', '$newqty')");
	endforeach;
	
	mysqli_query($con,"insert into activitylog (userid,action,activity_date) values ('".$_SESSION['id']."','Confirm reservation - Dealer: ".$urow['firstname']." ".$urow['lastname']." | Amount: ".$b['total_cost']."',NOW())");
	
	?>
		<script>
			window.alert('Reservation Confirmed!');
			window.history.back();
		</script>
	<?php
	}
?>