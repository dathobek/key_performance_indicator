<?php
	
	include('session.php');
	$id=$_GET['id'];
	
	$p=mysqli_query($con,"select * from product where productid='$id'");
	$prow=mysqli_fetch_array($p);
	
	$prodname=$_POST['prodname'];
	$category=$_POST['category'];
	$prodprice=$_POST['prodprice'];
	$prodpromo=$_POST['prodpromo'];
	
	$fileInfo = PATHINFO($_FILES["image"]["name"]);
	
	if (empty($_FILES["image"]["name"])){
		$location=$prow['img_src'];
	}
	else{
		if ($fileInfo['extension'] == "jpg" OR $fileInfo['extension'] == "png") {
			$newFilename = $fileInfo['filename'] . "_" . time() . "." . $fileInfo['extension'];
			move_uploaded_file($_FILES["image"]["tmp_name"], "../upload/" . $newFilename);
			$location = "upload/" . $newFilename;
		}
		else{
			$location=$prow['img_src'];
			?>
				<script>
					window.alert('Photo not updated. Please upload JPG or PNG photo only!');
				</script>
			<?php
		}
	}
	
	mysqli_query($con,"update product set prod_name='$prodname', categoryid='$category', prod_price='$prodprice', p_discount='$prodpromo', img_src='$location' where productid='$id'");
	mysqli_query($con,"update product_backup set prod_name='$prodname', categoryid='$category', prod_price='$prodprice', p_discount='$prodpromo', img_src='$location' where productid='$id'");
	
	mysqli_query($con,"insert into activitylog (userid,action,activity_date) values ('".$_SESSION['id']."','Update product - Name: ".$prodname."',NOW())");
	
	?>
		<script>
			window.alert('Product updated successfully!');
			window.history.back();
		</script>
	<?php

?>