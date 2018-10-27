<?php
	include('conn.php');
	$pid=$_GET['id'];
	
	$pro=mysqli_query($con,"select * from product where productid='$pid'");
	$row=mysqli_fetch_array($pro);
	
	$newqty=$_POST['pquantity'];
	$availqty=$row['avail_qty'];
	
	$addqty=$newqty+$availqty;
	
	mysqli_query($con,"update product set avail_qty='$addqty' where productid='$pid'");
	header('location:product.php');
?>