<?php include('session.php'); ?>
<?php include('header.php'); ?>

<body>

    <div id="wrapper">
		<?php include('navbar.php'); ?>
		<br><br>
		<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Products
						<span class="pull-right">
							<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addnewproduct"><i class="fa fa-plus-circle"></i> Add Product</button>
						</span>
						</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
				<div class="row">
                <div class="col-lg-12">
                    
					<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Product Name</th>
								<th>Category</th>
								<th>Quantity</th>
								<th>Photo</th>
								<th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
							<?php
								$pq=mysqli_query($con,"select * from product left join prod_category on prod_category.categoryid=product.categoryid order by prod_name asc");
								while($pqrow=mysqli_fetch_array($pq)){
									$pid=$pqrow['productid'];
								?>
								<tr>
									<td><?php echo ucwords($pqrow['prod_name']); ?></td>
									<td><?php echo $pqrow['catname']; ?></td>
									<td>
										<?php 
											if ($pqrow['p_quantity']<=0){
												echo "Out of Stock";
											} 
											else{
												echo $pqrow['p_quantity'];
											}
										?>
									</td>
									<td><img src="../<?php if($pqrow['img_src']==""){echo "img/noimage.jpg";}else{echo $pqrow['img_src'];} ?>" height="30px" width="30px;"></td>
									<td>
										<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addinv_<?php echo $pid; ?>"><i class="fa fa-plus-circle"></i> Add Stock</button>
										<?php include('product_button.php'); ?>
									</td>
								</tr>
								<?php
								}
							?>
                        </tbody>
                    </table>
                          
				</div>
            </div>
            <!-- /.container-fluid -->
        </div>
	</div>
	
	<?php include('scripts.php'); ?>
	<?php include ('modal.php'); ?>
	<?php include ('product_modal.php'); ?>
	
</body>
</html>