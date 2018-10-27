<?php
	
	include('conn.php');
	include('session.php');
	
	mysqli_query($con,"insert into sales (employeeid,sales_date) values ('".$srow['employeeid']."',NOW())");
	$sid=mysqli_insert_id($con);
	
	if(isset($_POST['prodid'])){
		
		foreach($_POST['prodid'] as $info):
		$infopro=explode("||",$info);
		$productid=$infopro[0];
		$iterate=$infopro[1];
		
			if (isset($_POST['quantity_'.$iterate])){
					
				$up=mysqli_query($con,"select * from product where productid='$productid'");
				$urow=mysqli_fetch_array($up);
					mysqli_query($con,"insert into sales_details (salesid, productid, sales_qty) values ('$sid', '$productid', '".$_POST['quantity_'.$iterate]."')");
				}
				
		endforeach;
		
	}
	header('location:invoice.php?id='.$sid);
?>