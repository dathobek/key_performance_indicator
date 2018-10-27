<?php include('session.php'); ?>
<?php include('header.php'); ?>
<body>
    <div class="container-fluid">
		<br>
            <div class="container-fluid">
				<div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-7">
						<table>
							<tr>
								<td rowspan="3" style="width:60px;"><img src="../img/ps_logo.png" width="50px" height="50px"></td>
								<td><span style="font-size:20px;">Personal Collections</span></td>
							</tr>
						</table>
					</div>
					<div class="col-lg-5 pull-right noprint">
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
						<button class="btn btn-success " onclick="window.print()"><span class="glyphicon glyphicon-print"></span> Print</button>
						<a href="product.php" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</a>
					</div>					
				</div>
				</div>
				<br>
				<div class="row">
                <div class="col-lg-12">
                    <span style="font-size:13px;">PRODUCT LIST</span><br>			
				</div>
				</div>
				<br>
				<div class="row">
                <div class="col-lg-12">
                    <table width="100%" class="table table-bordered" style="font-size:13px;">
						<thead>
							<th>Product Name</th>
                            <th>Price</th>
							<th>Promo</th>
							<th>Quantity</th>
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
									<td>
										<?php 
											if($pqrow['p_quantity']<=0){
												echo "Out of Stock";
											}
											else{
												echo $pqrow['p_quantity'];
											}											
										?>
									</td>
								</tr>
								<?php
								}
							?>
						</tbody>
					</table>					
				</div>
				</div>
           
			</div>
	</div>
	<br>
	
	<?php include('scripts.php'); ?>
	<?php include ('modal.php'); ?>
	<script type="text/javascript">
	$(document).ready(function(){
		$("#catList").on('change', function(){
			if($(this).val() == 0)
			{
				window.location = 'view_product.php';
			}
			else
			{
				window.location = 'view_product.php?category='+$(this).val();
			}
		});
	});
	</script>
</body>
</html>