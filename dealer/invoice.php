<?php include('session.php'); ?>
<?php include('header.php'); ?>
<?php
	$myarray = json_decode($_GET['myarray'], true);
	
	$encode = json_encode($myarray);
	$data1 = rawurlencode($encode);
	
 
?>
<body>

    <div id="wrapper">
		<?php include('navbar.php'); ?>
		<br><br>
		<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">Reservation Invoice
						</h2>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
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
									foreach ($myarray as $data):
									$rd=mysqli_query($con,"select * from product where productid=$data[product]");
									$rdrow=mysqli_fetch_array($rd);
									//$rd=mysqli_query($con,"select * from reserve_detail left join product on product.productid=reserve_detail.productid where reserveid='$rid'");
									//while($rdrow=mysqli_fetch_array($rd)){
										?>
										<tr>
											<td><?php echo ucwords($rdrow['prod_name']); ?></td>
											<td>
												<?php 
													echo $data['qty'];
													$tq+=$data['qty'];
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
													if ($rdrow['categoryid']==6){
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
													if ($rdrow['p_discount']==0){
														$pdis=0;
														echo number_format($pdis,2);
													}
													elseif($rdrow['p_discount']==1){
														$pdis=0;
														echo number_format($pdis,2);
													}
													else{
														$pd=$rdrow['p_discount']/100;
														$pdis=$rdrow['prod_price']*$pd;
														echo number_format($pdis,2);
													}
													
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
													$net=$data['qty']*$nbd;
													echo number_format($net,2);
													$tnet+=$net;
												?>
											</td>
										</tr>
										<?php
									
									 endforeach;
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
								<tr>
									<td align="right" colspan="6"><strong>CREDIT</strong></td>
									<td align="right"><strong>&#8369; <?php echo number_format($srow['credit'],2); ?></strong></td>
								</tr>
								<tr>
									<td align="right" colspan="6"><strong>LESS: THIS INVOICE</strong></td>
									<td align="right"><strong>&#8369; <?php echo number_format($tnet,2); ?></strong></td>
								</tr>
								<tr>
									<td align="right" colspan="6"><strong>AVAILABLE CREDIT LEFT</strong></td>
									<td align="right"><strong>
										&#8369; <?php 
											$credit=$srow['credit']-$tnet;
											echo number_format($credit,2);
											?>
										</strong>
									</td>
								</tr>
							</tbody>
						</table>
                    </div>
				</div>
				<div class="row">
					<div class="col-lg-12">
					<span class="pull-right">
					<a href="confirm_reserve.php?<?php echo 'myarray='.$data1.'&cost='.$tnet.'&credit='.$credit; ?>" class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Confirm</a> <a href="reserve.php" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Cancel</a>
					</span>
					</div>
				</div><br>
            </div>
            <!-- /.container-fluid -->
        </div>
	</div>
	
	<?php include('scripts.php'); ?>
	<?php include('modal.php'); ?>
	
</body>
</html>