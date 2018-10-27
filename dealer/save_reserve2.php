<?php
	
	include('session.php');

	if(isset($_POST['prodid'])){
		
		$quantity=array();
		$newq=array();
		$url=array();
		foreach($_POST['prodid'] as $info):
		$infopro=explode("||",$info);
		$productid=$infopro[0];
		$iterate=$infopro[1];
		$a=mysqli_query($con,"select * from product where productid='$productid'");
		$b=mysqli_fetch_array($a);
		
		$quantity[]=$b['p_quantity'];
		
		if (isset($_POST['quantity_'.$iterate])){
			
			if (!empty($_POST['quantity_'.$iterate]==false)){
				?>
					<script>
						window.alert('The quantity of selected product must not be empty!');
						window.location.href='reserve.php';
					</script>
				<?php
					
				exit();
			}
				
			if ($b['p_discount']==1){
				$new_quantity=$_POST['quantity_'.$iterate]*2;
			}
			else{
				$new_quantity=$_POST['quantity_'.$iterate];
			}
			$newq[]=$b['p_quantity']-$new_quantity;
			
			$myarray[]=array('product' => $productid, 'qty' => $_POST['quantity_'.$iterate]);
		}
		endforeach;
		
		function neg($var){
			if($var < 0){
				return $var;
			}
		}
		
		$carray=count(array_filter($newq,"neg"));
		
		if (in_array("0",$quantity)){
		?>
			<script>
				window.alert('The selected product or one of the selected products is out of stock!');
				window.location.href='reserve.php';
			</script>
		<?php
		}
		elseif ($carray>0){
		?>
			<script>
				window.alert('The selected product or one of the selected products have an insufficient stock!');
				window.location.href='reserve.php';
			</script>
		<?php
		}
		else{
			
			$encode = json_encode($myarray);
			$data = 'myarray=' . rawurlencode($encode);
			header('location:invoice.php?'.$data);
			
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