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
                        <h1 class="page-header">Add Sales</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
				<div class="row">
				<div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
							Add Sale Form
						</div>
						<div class="panel-body">
							<form method="POST" action="save_sales.php">
								<div class="form-group input-group">
									<span class="input-group-addon" style="width:100px;">Customer Name:</span>
									<input type="text" style="width:300px;" class="form-control" name="customer" required> &nbsp;
									<a class="btn btn-primary btn-sm" data-toggle="modal" href="#addproduct"><i class="fa fa-plus-circle"></i> Add Product</a>
								</div>
								
								<table width="100%" class="table table-striped table-bordered table-hover" id="SalesProd">
                                <thead>
                                    <tr>
                                        <th></th>
										<th>Product Name</th>
										<th>Category</th>
										<th>Price</th>
										<th>Avail Qty</th>
										<th>Quantity</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php
									$pq=mysqli_query($con,"select * from product left join prod_category on prod_category.categoryid=product.categoryid order by catname asc, prod_name asc");
									$iterate=0;
									while($pqrow=mysqli_fetch_array($pq)){
									$disables = $pqrow['avail_qty'] > 0 ? "" : "disabled"; 
									?>
									<tr>
										<td><input type="checkbox" value="<?php echo $pqrow['productid']; ?>||<?php echo $iterate; ?>" name="prodid[]" <?php echo $disables; ?>></td>
										<td><?php echo $pqrow['prod_name']; ?></td>
										<td><?php echo $pqrow['catname']; ?></td>
										<td>&#8369; <?php echo number_format($pqrow['prod_price'],2); ?></td>
										<td>
											<?php 
												if ($pqrow['avail_qty']<=0){
													echo "No Stock Available";
												}
												else{
													echo $pqrow['avail_qty'];
												}													
											?>
										</td>
										<td><input type="text" name="quantity_<?php echo $iterate; ?>" class="form-control" <?php echo $disables; ?>></td>
									</tr>
									<?php
									$iterate++;
									}
								?>
                                </tbody>
                            </table>
								<button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Save</button>
							</form>
						</div>
					</div>
				</div>
               </div>
            </div>
            <!-- /.container-fluid -->
        </div>
	</div>
	
	<?php include('scripts.php'); ?>
	<?php include ('modal.php'); ?>
	
	<script type="text/javascript">
	jQuery(document).ready( function($){
	var materialTable = $('#SalesProd').dataTable( {
		"bPaginate":true,
		"bLengthChange":true,
		"bFilter":true,
		"bInfo":true,
		"bSort":true
	} );
	
	$("form").on('submit',function(evt){
		var _this = $(this);
		materialTable.$('input[type="checkbox"]').each(function(){
			if(!$.contains(document, this))
			{
				if(this.checked)
				{
					_this.append($('<input>').attr('type', 'hidden').attr('name', this.name).val(this.value));
				}
			} 
		});
		materialTable.$('input[type="text"]').each(function(){
			if(!$.contains(document, this))
			{
				_this.append($('<input>').attr('type', 'hidden').attr('name', this.name).val(this.value));
			} 
		});
	});
	});
	</script>
	
</body>
</html>