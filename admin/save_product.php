<?php
	include('conn.php');

	$i = 0;
	foreach( $_POST['id'] as $id ): 
		$query=mysqli_query($con,"update product set prod_name = '".$_POST['prodname'][$i]."', categoryid = '".$_POST['prodcategory'][$i]."', prod_price = '".$_POST['prodprice'][$i]."', avail_qty = '".$_POST['prodqty'][$i]."' where productid = '".$id."'");
	$i++;
	endforeach;
	
	header('location:product.php');
	
?>