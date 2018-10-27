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
							<select id="catList" class="btn btn-default">
								<option value="0">All Category</option>
								<?php
									$cat=mysqli_query($con,"select * from prod_category");
									while($catrow=mysqli_fetch_array($cat)){
										$catid = isset($_GET['category']) ? $_GET['category'] : 0;
										$selected = ($catid == $catrow['categoryid']) ? " selected" : "";
										echo "<option$selected value=".$catrow['categoryid'].">".$catrow['catname']."</option>";	
									}
								?>
							</select>
							<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addnewproduct"><i class="fa fa-plus-circle"></i> Add Product</button>
							<a href="view_product.php" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-print"></span> Print</a>
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
                                <th>Price</th>
								<th>Promo</th>
								<th>Quantity</th>
								<th>Photo</th>
								<th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
							<?php
								$where="";
								if(isset($_GET['category']))
								{
									$catid=$_GET['category'];
									if ($catid==0){
										$where="";
									}
									else{
									$where = " WHERE product.categoryid = $catid";
									}
								}
								$pq=mysqli_query($con,"select * from product left join prod_category on prod_category.categoryid=product.categoryid $where order by prod_name asc");
								while($pqrow=mysqli_fetch_array($pq)){
									$pid=$pqrow['productid'];
								?>
								<tr>
									<td><?php echo ucwords($pqrow['prod_name']); ?></td>
									<td>&#8369; <?php echo number_format($pqrow['prod_price'],2); ?></td>
									<td>
										<?php
											if	($pqrow['p_discount']==0){
												echo "None";
											}									
											elseif	($pqrow['p_discount']==1){
												echo "Buy One Take One";
											}
											else{
												echo $pqrow['p_discount']." % OFF"; 
											}
										?>
									</td>
									<td><a href="#edit_inv<?php echo $pid; ?>" data-toggle="modal"><i class="fa fa-pencil"></i> 
										<?php 
											if($pqrow['p_quantity']<=0){
												echo "Out of Stock";
											}
											else{
												echo $pqrow['p_quantity'];
											}											
										?></a>
										<?php include('credit_button.php'); ?>
									</td>
									<td><img src="../<?php if($pqrow['img_src']==""){echo "img/noimage.jpg";}else{echo $pqrow['img_src'];} ?>" height="30px" width="30px;"></td>
									<td>
										<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#editprod_<?php echo $pid; ?>"><i class="fa fa-edit"></i> Edit</button>
										<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delproduct_<?php echo $pid; ?>"><i class="fa fa-trash"></i> Delete</button>
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
	<script type="text/javascript">
	$(document).ready(function(){
		$("#catList").on('change', function(){
			if($(this).val() == 0)
			{
				window.location = 'product.php';
			}
			else
			{
				window.location = 'product.php?category='+$(this).val();
			}
		});
	});
	</script>
</body>
</html>