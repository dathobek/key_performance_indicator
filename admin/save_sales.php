<?php
	
	include('session.php');
	
	$customer=$_POST['customer'];
	
	mysqli_query($con,"insert into sales (employeeid,customer_name,sales_date) values ('".$srow['employeeid']."','$customer',NOW())");
	$sid=mysqli_insert_id($con);
	
	if(isset($_POST['prodid'])){
		
		foreach($_POST['prodid'] as $info):
		$infopro=explode("||",$info);
		$productid=$infopro[0];
		$iterate=$infopro[1];
		
			if (isset($_POST['quantity_'.$iterate])){
					
				$up=mysqli_query($con,"select * from product where productid='$productid'");
				$urow=mysqli_fetch_array($up);
				
				$newqty=$urow['avail_qty']-$_POST['quantity_'.$iterate];
				
				if ($newqty<0){
					mysqli_query($con,"delete from sales where salesid='$sid'");
					header('location:wew.php?id='.$productid);
				}
				else{
					mysqli_query($con,"update product set avail_qty='$newqty' where productid='$productid'");
					mysqli_query($con,"insert into sales_details (salesid, productid, sales_qty) values ('$sid', '$productid', '".$_POST['quantity_'.$iterate]."')");
					header('location:sales_report.php');
				}
			}
		endforeach;
		
	}
	
?>