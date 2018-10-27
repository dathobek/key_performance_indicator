<!-- Reserve Details -->
    <div class="modal fade" id="reserve_detail<?php echo $rid; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<?php
		$res=mysqli_query($con,"select * from reservation left join dealer on dealer.userid=reservation.userid where reserveid='$rid'");
		$resrow=mysqli_fetch_array($res);
	?>
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<center><h4 class="modal-title" id="myModalLabel">Full Details</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<div class="row" style="margin-left:0px; margin-right:0px;">
					<h5>Dealer Name: <?php echo ucwords($resrow['firstname']); ?> <?php echo ucwords($resrow['middle_i']); ?>. <?php echo ucwords($resrow['lastname']); ?>
					<span class="pull-right">Reserve Date: <?php echo date("M d, Y - h:i A", strtotime($resrow['reserve_date'])); ?></span></h5>
				</div>
					<div style="height:5px;"></div>
					<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
							<tr>
							<th>Description</th>
							<th>Qty</th>
							<th>Price</th>
							<th>Discount</th>
							<th>NBD</th>
							<th>Amount</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$dis=0;
								$tnet=0;
								$rd=mysqli_query($con,"select * from reserve_detail left join product on product.productid=reserve_detail.productid where reserveid='$rid'");
								while($rdrow=mysqli_fetch_array($rd)){
									?>
									<tr>
										<td><?php echo $rdrow['prod_name']; ?></td>
										<td>
											<?php 
												echo $rdrow['reserve_qty'];
											?>
										</td>
										<td align="right">
											&#8369; 
											<?php 
												echo number_format($rdrow['prod_price'],2);
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
													
												if ($rdrow['p_discount']==0){
													$pdis=0;
												}
												elseif($rdrow['p_discount']==1){
													$pdis=0;
												}
												else{
													$pd=$rdrow['p_discount']/100;
													$pdis=$rdrow['prod_price']*$pd;
												}
													
													$totdis=$discount+$pdis;
													echo number_format($totdis,2);
											?>
										</td>
										<td align="right">
											&#8369;
												<?php 
													
													$nbd=$rdrow['prod_price']-$discount-$pdis;
													echo number_format($nbd,2);
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
								<td colspan="5" align="right"><strong>Total:</strong></td>
								<td align="right">&#8369; <?php echo number_format($tnet,2); ?></td>
							</tr>
						</tbody>
					</table>
				</div>
				</div>
				<div style="height:5px;"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<!-- /.modal -->