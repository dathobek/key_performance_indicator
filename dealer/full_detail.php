<?php include('session.php'); ?>
<?php include('header.php'); ?>
<?php
	$rid=$_GET['id'];
	$reserve=mysqli_query($con,"select * from reservation where reserveid='$rid'");
	$rerow=mysqli_fetch_array($reserve);
?>
<body>


    <div id="wrapper">
		<?php include('navbar.php'); ?>
		<br><br>
		<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-headers">Reservation Full Details
						<span class="pull-right">
							<a onclick="window.print()" class="btn btn-success btn-sm noprint"><i class="fa fa-print"></i> Print</a> <a href="history.php" class="btn btn-primary btn-sm noprint"><i class="fa fa-arrow-left"></i> Back</a>
						</span>
						</h2>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
				<div class="row">
					<div class="col-lg-9 rname">
                        <p>Sold to: <?php echo ucwords($srow['lastname']); ?>, <?php echo ucwords($srow['firstname']); ?> <?php echo ucwords($srow['middlename']); ?></p>
                    </div>
					<div class="col-lg-3">
                        <p class="pull-right">Date: <?php echo date("M d, Y", strtotime($rerow['reserve_date'])); ?></p>
                    </div>
				</div>
				<div class="row noprint">
					<div class="col-lg-12">
                        <p>Address: <?php echo ucwords($srow['address']); ?></p>
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
									$rd=mysqli_query($con,"select * from reserve_detail left join product on product.productid=reserve_detail.productid where reserveid='$rid'");
									while($rdrow=mysqli_fetch_array($rd)){
										?>
										<tr>
											<td><?php echo ucwords($rdrow['prod_name']); ?></td>
											<td>
												<?php 
													echo $rdrow['reserve_qty'];
													$tq+=$rdrow['reserve_qty'];
												?>
											</td>
											<td align="right">
												&#8369; 
												<?php 
													echo number_format($rdrow['prod_price'],2);
													$tp+=$rdrow['prod_price'];
												?>
											</td>
											<td align="right">
												&#8369;
												<?php 
													if ($rdrow['is_coffee']=="yes"){
														$dis=0.20;
													}
													else{
														$dis=0.25;
													}
													$discount=$rdrow['prod_price']*$dis;
													echo number_format($discount,2);
													$td+=$discount;
												?>
											</td>
											<td align="right">
												&#8369;
												<?php 
													$pd=$rdrow['p_discount']/100;
													$pdis=$rdrow['prod_price']*$pd;
													echo number_format($pdis,2);
													$tpro+=$pdis;
												?>
											</td>
											<td align="right">
												&#8369;
												<?php 
													$nbd=$rdrow['prod_price']-$discount-$pdis;
													echo number_format($nbd,2);
													$tnbd+=$nbd;
												?>
											</td>
											<td align="right">
												&#8369;
												<?php 
													$net=$rdrow['reserve_qty']*$nbd;
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
												echo number_format($vat,2);
												?>
									</strong></td>
								</tr>
								<tr>
									<td align="right" colspan="6"><strong>NET OF VAT</strong></td>
									<td align="right"><strong>
										&#8369; <?php 
												$netvat=$tnet-$vat;
												echo number_format($netvat,2);
												?>
									</strong></td>
								</tr>
								<tr>
									<td align="right" colspan="6"><strong>TOTAL AMOUNT DUE</strong></td>
									<td align="right"><strong>&#8369; <?php echo number_format($tnet,2); ?></strong></td>
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
	
	
</body>
</html>