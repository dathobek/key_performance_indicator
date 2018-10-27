<?php
	include('conn.php');
	include('session.php');
	$pid=$_GET['id'];
	
	$a=mysqli_query($con,"select * from product where productid='$pid'");
	$b=mysqli_fetch_array($a);
	$c=$b['p_quantity'];
	
	$newqty=$_POST['pqty'];
	
	mysqli_query($con,"update product set p_quantity='$newqty' where productid='$pid'");
	mysqli_query($con,"insert into inventory (userid,productid,inv_date,action) values ('".$_SESSION['id']."','$pid',NOW(),'Update quantity: from $c to $newqty')");
	?>
		<script>
		window.alert('Product Quantity Updated!');
		window.history.back();
		</script>
	<?php
	
?>