<?php
	include('session.php');
	$pid=$_GET['id'];
	
	$pro=mysqli_query($con,"select * from product where productid='$pid'");
	$row=mysqli_fetch_array($pro);
	
	$newqty=$_POST['pquantity'];
	$availqty=$row['p_quantity'];
	
	$addqty=$newqty+$availqty;
	
	mysqli_query($con,"update product set p_quantity='$addqty' where productid='$pid'");
	mysqli_query($con,"update product_backup set p_quantity='$addqty' where productid='$pid'");
	
	mysqli_query($con,"insert into inventory (userid,productid,inv_date,action) values ('".$_SESSION['id']."','$pid',NOW(),'Add stock: $newqty')");
	mysqli_query($con,"insert into activitylog (userid,action,activity_date) values ('".$_SESSION['id']."','Add stock - Name: ".$row['prod_name']." || Qty: ".$newqty."',NOW())");
	?>
		<script>
			window.alert('Stock added successfully!');
			window.history.back();
		</script>
	<?php
	
?>
