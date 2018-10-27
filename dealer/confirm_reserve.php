<?php
	
	include('session.php');
	
	$myarray = json_decode($_GET['myarray'], true);
	$cost = $_GET['cost'];
	
	$encode = json_encode($myarray);
	$data = 'myarray=' . rawurlencode($encode);
	
	$newlimit=$_GET['credit'];
	
	if ($newlimit <= 0){		
		?>
			<script type="text/javascript">
				var data='<?php echo $data; ?>';
				window.alert("Could not confirm reservation. You've exceeded your credit.");
				window.location.href='invoice.php?'+data;
			</script>
		<?php
		
		exit();
	}
	else{
		
		$set='123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$code=substr(str_shuffle($set), 0, 12);
		
		mysqli_query($con,"insert into reservation (userid, total_cost, reserve_date, res_status, claim_code) values ('".$_SESSION['id']."', '$cost', NOW(), '1', '$code')");
		$rid=mysqli_insert_id($con);
		
		foreach($myarray as $info):
			$pro=mysqli_query($con,"select * from product where productid = $info[product]");
			$prorow=mysqli_fetch_array($pro);
			
			if ($prorow['p_discount']==1){
				$quant=$info['qty']*2;
			}
			else{
				$quant=$info['qty'];
			}
			$newquantity=$prorow['p_quantity']-$quant;
			
			mysqli_query($con,"update product set p_quantity='$newquantity' where productid=$info[product]");
			mysqli_query($con,"update product_backup set p_quantity='$newquantity' where productid=$info[product]");
			mysqli_query($con,"insert into reserve_detail (reserveid, productid, reserve_qty) values ('$rid' , $info[product], $info[qty])");
		endforeach;
		
		
		mysqli_query($con,"update dealer set credit='$newlimit' where userid='".$_SESSION['id']."'");
		mysqli_query($con,"update dealer_backup set credit='$newlimit' where userid='".$_SESSION['id']."'");
		?>
			<script type="text/javascript">
				var code="<?php echo $code; ?>"; 
				window.alert("Reservation successful!");
				window.location.href='code.php?code='+code;
			</script>
		<?php
	
	mysqli_query($con,"insert into activitylog (userid,action,activity_date) values ('".$_SESSION['id']."','Add reservation - Total amount: ".$cost."',NOW())");
	}
?>