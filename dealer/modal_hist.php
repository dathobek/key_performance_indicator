<!-- History -->
    <div class="modal fade" id="full_detail<?php echo $shrow['reserveid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<center><h4 class="modal-title" id="myModalLabel">Reservation Full Details</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$reserve=mysqli_query($con,"select * from reservation where reserveid='".$shrow['reserveid']."'");
					$rerow=mysqli_fetch_array($reserve);
				?>
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-9 rname">
							<p>Sold to: <?php echo ucwords($srow['lastname']); ?>, <?php echo ucwords($srow['firstname']); ?> <?php echo ucwords($srow['middle_i']); ?></p>
						</div>
						<div class="col-lg-3">
							<p class="pull-right">Date: <?php echo date("M d, Y", strtotime($rerow['reserve_date'])); ?></p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-9">
							<p>Address: <?php echo ucwords($srow['address']); ?></p>
						</div>
						<div class="col-lg-3">
							<p class="pull-right">Code: <strong><?php echo $rerow['claim_code']; ?></strong></p>
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
										$rd=mysqli_query($con,"select * from reserve_detail left join product_backup on product_backup.productid=reserve_detail.productid where reserveid='".$shrow['reserveid']."'");
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
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<!-- /.modal -->