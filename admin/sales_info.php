<!-- Sales Details -->
    <div class="modal fade" id="sales_details<?php echo $sid; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Sales Full Details</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<?php
					$sales=mysqli_query($con,"select * from sales left join dealer_backup on dealer_backup.userid=sales.userid where salesid='$sid'");
					$sarow=mysqli_fetch_array($sales);
				?>
				<div class="row">
					<div class="col-lg-9">
                        <p>Sold to: <?php echo ucwords($sarow['lastname']); ?>, <?php echo ucwords($sarow['firstname']); ?> <?php echo ucwords($sarow['middle_i']); ?></p>
                    </div>
					<div class="col-lg-3">
                        <p class="pull-right">Date: <?php echo date("M d, Y", strtotime($sarow['sales_date'])); ?></p>
                    </div>
				</div>
				<div class="row">
					<div class="col-lg-12">
                        <p>Address: <?php echo $sarow['address']; ?></p>
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
									$sales1=mysqli_query($con,"select * from sales_details left join product_backup on product_backup.productid=sales_details.productid where salesid='$sid'");
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
													if ($sarow1['categoryid']==6){
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
													if ($sarow1['p_discount']==0){
														$pdis=0;
													}
													elseif($sarow1['p_discount']==1){
														$pdis=0;
													}
													else{
													$pd=$sarow1['p_discount']/100;
													$pdis=$sarow1['prod_price']*$pd;
													}
													
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
							</tbody>
						</table>
                    </div>
				</div>               
				</div>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                </div>
				
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<!-- /.modal -->