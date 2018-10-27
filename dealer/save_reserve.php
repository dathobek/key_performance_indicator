<?php
	
	include('conn.php');
	include('session.php');

	if(isset($_POST['prodid'])){
	
		$quantity=array();
		foreach($_POST['prodid'] as $info):
		$infopro=explode("||",$info);
		$productid=$infopro[0];
		$iterate=$infopro[1];
		$a=mysqli_query($con,"select * from product where productid='$info'");
		$b=mysqli_fetch_array($a);
		$quantity[]=$b['p_quantity'];
		endforeach;
		
		if (in_array("0",$quantity)){
			?>
			<script>
				window.alert('The selected product or one of the selected products is out of stock!');
				window.location.href='reserve.php';
			</script>
			<?php
		}
		else{
			mysqli_query($con,"insert into reservation (userid,reserve_date,res_status) values ('".$srow['userid']."',NOW(),'1')");
			$rid=mysqli_insert_id($con);
			
			$newq=array();
			foreach($_POST['prodid'] as $info):
			$infopro=explode("||",$info);
			$productid=$infopro[0];
			$iterate=$infopro[1];
			$a=mysqli_query($con,"select * from product where productid='$info'");
			$b=mysqli_fetch_array($a);
			
			if (isset($_POST['quantity_'.$iterate])){
				if ($b['p_discount']==1){
					$new_quantity=$_POST['quantity_'.$iterate]*2;
				}
				else{
					$new_quantity=$_POST['quantity_'.$iterate];
				}
				$newq[]=$b['p_quantity']-$new_quantity;
			}
			endforeach;
			
			function neg($var){
				if($var < 0){
					return $var;
				}
			}
			$carray=count(array_filter($newq,"neg"));
			
			if ($carray>0){
				?>
					<script>
						window.alert('The selected product or one of the selected products have an insufficient stock!');
						window.location.href='reserve.php';
					</script>
				<?php
			}
			else{
			foreach($_POST['prodid'] as $info):
			$infopro=explode("||",$info);
			$productid=$infopro[0];
			$iterate=$infopro[1];
			$a=mysqli_query($con,"select * from product where productid='$info'");
			$b=mysqli_fetch_array($a);
			
			if (isset($_POST['quantity_'.$iterate])){
				
				if (!empty($_POST['quantity_'.$iterate]==false)){
					?>
					<script>
						window.alert('The quantity of selected product must not be empty!');
						window.location.href='reserve.php';
					</script>
					<?php
				}
				else{
					if ($b['p_discount']==1){
						$new_quantity=$_POST['quantity_'.$iterate]*2;
					}
					else{
						$new_quantity=$_POST['quantity_'.$iterate];
					}
					
					$newq2=$b['p_quantity']-$new_quantity;
					mysqli_query($con,"insert into reserve_detail (reserveid, productid, reserve_qty) values ('$rid', '$productid', '".$_POST['quantity_'.$iterate]."')");
					mysqli_query($con,"update product set p_quantity='$newq2' where productid=$productid");
					header('location:invoice.php?id='.$rid);
				}
			}
			
			endforeach;
			}
		}
	}
	else{
		?>
		<script>
			window.alert('You must select product and input quantity first!');
			window.location.href='reserve.php';
		</script>
		<?php
	}
?>