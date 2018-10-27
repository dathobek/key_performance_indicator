<?php
	include('session.php');
	
	$prodname=$_POST['prodname'];
	$prodcat=$_POST['prodcategory'];
	$prodprice=$_POST['proprice'];
	$prodpromo=$_POST['prodpromo'];
	$pqty=$_POST['pqty'];
	
	$fileInfo = PATHINFO($_FILES["image"]["name"]);
	
	if (empty($_FILES["image"]["name"])){
		$location="";
	}
	else{
		if ($fileInfo['extension'] == "jpg" OR $fileInfo['extension'] == "png") {
			$newFilename = $fileInfo['filename'] . "_" . time() . "." . $fileInfo['extension'];
			move_uploaded_file($_FILES["image"]["tmp_name"], "../upload/" . $newFilename);
			$location = "upload/" . $newFilename;
		}
		else{
			$location="";
			?>
				<script>
					window.alert('Photo not added. Please upload JPG or PNG photo only!');
				</script>
			<?php
		}
	}
	
	mysqli_query($con,"insert into product (prod_name,categoryid,prod_price,p_discount,p_quantity,img_src) values ('$prodname','$prodcat','$prodprice','$prodpromo','$pqty','$location')");
	$pid=mysqli_insert_id($con);
	
	mysqli_query($con,"insert into product_backup (productid, prod_name,categoryid,prod_price,p_discount,p_quantity,img_src) values ('$pid', '$prodname','$prodcat','$prodprice','$prodpromo','$pqty','$location')");

	mysqli_query($con,"insert into activitylog (userid,action,activity_date) values ('".$_SESSION['id']."','Add product - Name: ".$prodname."',NOW())");
	mysqli_query($con,"insert into inventory (userid, productid, action, inv_date) values ('".$_SESSION['id']."', '$pid', 'Add product - Stock: $pqty', NOW())");
	
	?>
		<script>
			window.alert('Product added successfully!');
			window.history.back();
		</script>
	<?php
?>