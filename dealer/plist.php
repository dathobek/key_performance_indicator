<?php include('session.php'); ?>
<?php include('header.php'); ?>
<?php
	$pid=$_GET['id'];
	$c=mysqli_query($con,"select * from prod_category where categoryid='$pid'");
	$crow=mysqli_fetch_array($c);
?>
<body>

    <div id="wrapper">
		<?php include('navbar.php'); ?>
		<br><br>
		<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header"><?php echo $crow['catname']; ?></h2>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
				<div class="row">
					<?php
						$inc=4;
						$p=mysqli_query($con,"select * from product where categoryid='$pid'");
						while($prow=mysqli_fetch_array($p)){
							$inc = ($inc == 4) ? 1 : $inc+1; 
							if($inc == 1) echo '<div class="row">'; 
							?>
								<div class="col-lg-3">
									<img src="../<?php if ($prow['img_src']==""){echo "img/noimage.jpg";}else{echo $prow['img_src'];} ?>" width="230px" height="230px" class="thumbnail">
									<div><?php echo ucwords($prow['prod_name']); ?></div>
									<div style="height:5px;"></div>
									<div>
										&#8369; <?php echo number_format($prow['prod_price'],2); ?>
										<span class="pull-right">
											<?php 
												if ($prow['p_discount'] == 0){
													echo "";
												}
												elseif ($prow['p_discount'] == 1){
													echo "Buy One Take One";
												}
												else{
													echo $prow['p_discount']. "% OFF";	
												}
											?> 
											
										</span>
									</div>
									<div style="height:20px;"></div>
								</div>
								
							<?php
							if($inc == 4) echo '</div>';
			}
			if($inc == 1) echo '<div class="col-lg-3"></div><div class="col-lg-3"></div><div class="col-lg-3"></div></div>'; 
			if($inc == 2) echo '<div class="col-lg-3"></div><div class="col-lg-3"></div></div>'; 
			if($inc == 3) echo '<div class="col-lg-3"></div></div>'; 
						
					?>
				</div>
            </div>
            <!-- /.container-fluid -->
        </div>
	</div>
	
	<?php include('scripts.php'); ?>
	<?php include('modal.php'); ?>
	
</body>
</html>