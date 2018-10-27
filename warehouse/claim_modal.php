<!-- Claim Details -->
	<div class="modal fade" id="details_<?php echo $cqrow['claimid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<?php
		$claim=mysqli_query($con,"select * from claim left join dealer_backup on dealer_backup.userid=claim.userid where claimid='".$cqrow['claimid']."'");
		$claimrow=mysqli_fetch_array($claim);
	?>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<center><h4 class="modal-title" id="myModalLabel">Full Details</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<div class="row" style="margin-left:0px; margin-right:0px;">
					<h5>Dealer Name: <?php echo ucwords($claimrow['lastname']); ?>, <?php echo ucwords($claimrow['firstname']); ?> <?php echo ucwords($claimrow['middle_i']); ?>
				</div>
					<div style="height:5px;"></div>
					<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
							<tr>
							<th>Product Name</th>
							<th>Quantity</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$clq=mysqli_query($con,"select * from claim_detail left join product on product.productid=claim_detail.productid where claimid='".$cqrow['claimid']."'");
								while($clqrow=mysqli_fetch_array($clq)){
									?>
									<tr>
										<td><?php echo $clqrow['prod_name']; ?></td>
										<td><?php echo $clqrow['claim_qty']; ?></td>
									</tr>
									<?php
								}
							?>
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


<!-- Logout -->
    <div class="modal fade" id="confirm_<?php echo $cqrow['claimid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Confirming...</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<h5><center>Did the dealer received the purchased product/s?</strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <a href="confirm_claim.php?id=<?php echo $cqrow['claimid']; ?>" class="btn btn-success"><i class="fa fa-check"></i> Yes</a>
                </div>
				
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<!-- /.modal -->