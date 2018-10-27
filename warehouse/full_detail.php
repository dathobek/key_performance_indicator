<?php include('session.php'); ?>
<?php include('header.php'); ?>
<?php
	$sid=$_GET['id'];
	$sales=mysqli_query($con,"select * from sales where salesid='$sid'");
	$sarow=mysqli_fetch_array($sales);
?>
<body>


    <div id="wrapper">
		<?php include('navbar.php'); ?>
		<br><br>
		<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">Purchase Full Details
						<span class="pull-right">
							<a onclick="myFunction()" class="btn btn-success btn-sm"><i class="fa fa-print"></i> Print</a> <a class="btn btn-primary btn-sm"><i class="fa fa-arrow-left"></i> Back</a>
						</span>
						</h2>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
				<div class="row">
					<div class="col-lg-9">
                        <p>Sold to: <?php echo $srow['lastname']; ?>, <?php echo $srow['firstname']; ?> <?php echo $srow['middlename']; ?></p>
                    </div>
					<div class="col-lg-3">
                        <p class="pull-right">Date: <?php echo date("M d, Y", strtotime($sarow['sales_date'])); ?></p>
                    </div>
				</div>
				<div class="row">
					<div class="col-lg-12">
                        <p>Address: <?php echo $srow['address']; ?></p>
                    </div>
				</div>
				<div class="row">
					<div class="col-lg-12">
                        <table width="100%" class="table table-striped table-bordered table-hover">
							<thead>
                                <tr>
                                    <th>Description</th>
									<th>Qty</th>
									<th>Price</th>
									<th>Discount</th>
									<th>Promo</th>
									<th>NBD</th>
									<th>Net Amount</th>
                                </tr>
                            </thead>
							<tbody>
								<?php
									$tq=0;
									$tp=0;
									$td=0;
									$tpro=0;
									$tnbd=0;
									$tnet=0;
									$sales1=mysqli_query($con,"select * from sales_details left join product on product.productid=sales_details.productid where salesid='$sid'");
									while($sarow1=mysqli_fetch_array($sales1)){
										?>
										<tr>
											<td><?php echo $sarow1['prod_name']; ?></td>
											<td>
												<?php 
													echo $sarow1['sales_qty'];
													$tq+=$sarow1['sales_qty'];
												?>
											</td>
											<td align="right">
												&#8369; 
												<?php 
													echo number_format($sarow1['prod_price'],2);
													$tp+=$sarow1['prod_price'];
												?>
											</td>
											<td align="right">
												&#8369;
												<?php 
													if ($sarow1['is_coffee']=="yes"){
														$dis=0.20;
													}
													else{
														$dis=0.25;
													}
													$discount=$sarow1['prod_price']*$dis;
													echo number_format($discount,2);
													$td+=$discount;
												?>
											</td>
											<td align="right">
												&#8369;
												<?php 
													$pd=$sarow1['p_discount']/100;
													$pdis=$sarow1['prod_price']*$pd;
													echo number_format($pdis,2);
													$tpro+=$pdis;
												?>
											</td>
											<td align="right">
												&#8369;
												<?php 
													$nbd=$sarow1['prod_price']-$discount-$pdis;
													echo number_format($nbd,2);
													$tnbd+=$nbd;
												?>
											</td>
											<td align="right">
												&#8369;
												<?php 
													$net=$sarow1['sales_qty']*$nbd;
													echo number_format($net,2);
													$tnet+=$net;
												?>
											</td>
										</tr>
										<?php
									}
								?>
								<tr>
									<td align="right"><strong>Grand Total</strong></td>
									<td><strong><?php echo $tq; ?></strong></td>
									<td align="right"><strong>&#8369; <?php echo number_format($tp,2); ?></strong></td>
									<td align="right"><strong>&#8369; <?php echo number_format($td,2); ?></strong></td>
									<td align="right"><strong>&#8369; <?php echo number_format($tpro,2); ?></strong></td>
									<td align="right"><strong>&#8369; <?php echo number_format($tnbd,2); ?></strong></td>
									<td align="right"><strong>&#8369; <?php echo number_format($tnet,2); ?></strong></td>
								</tr>
								<tr>
									<td align="right" colspan="6"><strong>TOTAL SALES</strong></td>
									<td align="right"><strong>&#8369; <?php echo number_format($tnet,2); ?></strong></td>
								</tr>
								<tr>
									<td align="right" colspan="6"><strong>LESS: 12% VAT</strong></td>
									<td align="right"><strong>
										&#8369; <?php 
												$vat=$tnet*0.12;
												echo $vat;
												?>
									</strong></td>
								</tr>
								<tr>
									<td align="right" colspan="6"><strong>NET OF VAT</strong></td>
									<td align="right"><strong>
										&#8369; <?php 
												$netvat=$tnet-$vat;
												echo $netvat;
												?>
									</strong></td>
								</tr>
								<tr>
									<td align="right" colspan="6"><strong>TOTAL AMOUNT DUE</strong></td>
									<td align="right"><strong>&#8369; <?php echo number_format($tnet,2); ?></strong></td>
								</tr>
								<tr>
									<td colspan="7">&nbsp;</td>
								</tr>
							</tbody>
						</table>
                    </div>
				</div>
            </div>
            <!-- /.container-fluid -->
        </div>
	</div>
	
	<?php include('scripts.php'); ?>
	<?php include('modal.php'); ?>
	<script>
function myFunction() {
    window.print();
}
</script>
	
</body>
</html>