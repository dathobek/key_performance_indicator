<?php include('session.php'); ?>
<?php include('header.php'); ?>

<body>
<div id="wrapper">
	<div class="container-fluid">
		<br>
		<center><h4><strong>Product List</strong></h4></center>
		<div class="noprint">
		<a href="product.php" class="btn btn-primary btn-sm printbutton"><i class="fa fa-arrow-left"></i> Back</a>
		<a onclick="window.print()" class="btn btn-success btn-sm"><i class="fa fa-print"></i> Print</a>
		</div>
        <br>
		<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Product Name</th>
								<th>Category</th>
                                <th>Price</th>
								<th>Promo</th>
								<th>Quantity</th>
								<th>Photo</th>
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
									<td>&#8369; <?php echo number_format($pqrow['prod_price'],2); ?></td>
									<td><?php echo $pqrow['p_discount']; ?></td>
									<td><a href="#edit_inv<?php echo $pid; ?>" data-toggle="modal"><i class="fa fa-pencil"></i> <?php echo $pqrow['p_quantity']; ?></a>
										<?php include('edit_qty.php'); ?>
									</td>
									<td><img src="../<?php if($pqrow['img_src']==""){echo "img/noimage.jpg";}else{echo $pqrow['img_src'];} ?>" height="30px" width="30px;"></td>
								</tr>
								<?php
								}
							?>
                        </tbody>
                    </table>
	</div>
</div>
</body>
</html>