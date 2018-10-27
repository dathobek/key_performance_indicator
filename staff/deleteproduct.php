<?php
	include('session.php');
	$pid=$_GET['id'];
	
	$a=mysqli_query($con,"select * from product where productid='$pid'");
	$b=mysqli_fetch_array($a);
	
	mysqli_query($con,"delete from product where productid='$pid'");
	mysqli_query($con,"insert into activitylog (userid,action,activity_date) values ('".$_SESSION['id']."','Delete product - Name: ".$b['prod_name']."',NOW())");
	?>
		<script>
			window.alert('Product deleted successfully!');
			window.history.back();
		</script>
	<?php

?>